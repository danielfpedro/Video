<?php 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

use Cake\Event\Event;

class SiteController extends AppController
{

	public $layout = 'custom';

	public function beforeFilter(Event $event)
	{
		$this->loadModel('Videos');
		Parent::beforeFilter($event);
	}

	public function home()
	{
		$this->loadModel('Videos');

		$destaques = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.destaque' => 1
			],
			'limit' => 2
		]);

		$artists = $this->Videos->Artists->find('all', [
			'conditions' => [
				'Artists.is_active' => 1
			],
			'limit' => 6
		]);

		$newest = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],			
			'conditions' => [
				'Videos.is_active' => 1
			],
			'limit' => 10
		]);

		$trends = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			],
			'limit' => 10
		]);

		$risings = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			],
			'limit' => 10
		]);

		$this->set(compact('destaques', 'artists', 'newest', 'trends', 'risings'));
	}

	public function player($slug = null)
	{
		$video = $this->Videos->find('all', [
			'contain' => ['Artists'],
			'conditions' => [
				'Videos.slug' => $slug
			]
		])->first();

		$videosSide = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			]
		]);

		$videos = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			]
		]);

		$this->set(compact('video', 'videosSide', 'videos'));
	}

	public function artistProfile($slug = null)
	{
		$this->loadModel('Artists');

		$artist = $this->Artists->find('all', [
			'conditions' => [
				'Artists.slug' => $slug,
				'Artists.is_active' => 1
			],
		])->first();

		if (!$artist) {
			throw new NotFoundException('Artista não existe.');
		}

		$videos = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			]
		]);

		$this->set(compact('artist', 'videos'));
	}

	public function search()
	{
		$videos = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1
			]
		]);

		$artists = [];
		if ($videos) {
			foreach ($videos as $video) {
				$artists[] = $video->artist;
			}
		}

		$this->set(compact('videos', 'artists'));
	}

	public function myProfile()
	{
		
	}

	public function stared()
	{

	}

	public function myPlaylists()
	{
		
	}

	public function playlists()
	{
		
	}

	public function playlistsModal($id = null)
	{
		$this->layout = 'ajax';

		
	}
}

?>