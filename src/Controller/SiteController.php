<?php 

namespace App\Controller;

use App\Controller\AppController;

class SiteController extends AppController
{

	public $layout = 'custom';

	public function home()
	{
		$this->loadModel('Videos');

		$destaques = $this->Videos->find('all', [
			'contain' => ['Artists'],
			'conditions' => [
				'Videos.destaque' => 1
			],
			'limit' => 2
		]);

		$this->set(compact('destaques'));
	}

	public function player($slug = null)
	{
		$this->loadModel('Videos');

		$video = $this->Videos->find('all', [
			'contain' => ['Artists'],
			'conditions' => [
				'Videos.slug' => $slug
			]
		])->first();

		$this->set(compact('video'));
	}

	public function artistProfile()
	{
		# code...
	}

	public function search()
	{
		
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