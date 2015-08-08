<?php 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

use Cake\Event\Event;
use Cake\Collection\Collection;

class SiteController extends AppController
{

	public $layout = 'custom';

	public function beforeFilter(Event $event)
	{
		$this->loadModel('Videos');
		Parent::beforeFilter($event);
		$this->Auth->allow();
	}

	public function home()
	{
		$this->loadModel('Videos');

		$destaques = $this->Videos->find('all', [
			'contain' => [
				'Artists',
				'Featurings'
			],
			'conditions' => [
				'Videos.destaque' => 1
			],
			'limit' => 2,
			'order' => 'rand()'
		]);

		$artists = $this->Videos->Artists->find('all', [
			'conditions' => [
				'Artists.is_active' => 1
			],
			'limit' => 6
		]);

		$trends = $this->Videos->find('all', [
			'contain' => [
				'Artists',
				'Featurings'
			],
			'conditions' => [
				'Videos.is_active' => 1
			],
			'limit' => 4
		]);

		$risings = $this->Videos->find('all', [
			'contain' => [
				'Artists',
				'Featurings'
			],
			'conditions' => [
				'Videos.is_active' => 1
			],
			'limit' => 6,
			'order' => 'rand()'
		]);

		$this->set(compact('destaques', 'artists', 'trends', 'risings'));
	}

	public function player($slug = null)
	{
		$video = $this->Videos->find('all', [
			'contain' => ['Artists', 'Featurings'],
			'conditions' => [
				'Videos.slug' => $slug
			]
		])->first();

		$videosSide = $this->Videos->find('all', [
			'contain' => [
				'Artists'
			],
			'conditions' => [
				'Videos.is_active' => 1,
			],
			'limit' => 6,
			'order' => 'rand()'
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
				'Artists', 'Featurings' => function($q) use ($artist){
					return $q->where(['ArtistsVideos.artist_id' => $artist->id]);
				}
			],
			'conditions' => [
				'Artists.id' => $artist->id,
				'Videos.is_active' => 1
			]
		]);

		$this->set(compact('artist', 'videos'));
	}

	public function search()
	{
		$q = $this->request->query('q');
		$conditions = [];
		if ($q) {
			$conditions[] = ['Videos.tags_search LIKE' => "%{$q}%" ];
		}
		$conditions[] = ['Videos.is_active' => 1];
		$videos = $this->Videos->find('all', [
			'contain' => ['Artists', 'Featurings'],
			'conditions' => $conditions
		]);
		$artists = $videos->extract('artist')->toArray();
		$featurings = $videos->extract('featurings')->toArray();
		$featurings = array_filter($featurings);
		$final = [];
		foreach ($featurings as $featuring) {
			foreach ($featuring as $key => $value) {
				$final[] = $value;
			}
		}
		//$final = new Collection($final);
		
		// Debug($final);
		// exit();
		$final = array_merge($final, $artists);
		//Debug($final);
		$artists = array_unique($final, SORT_REGULAR);
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