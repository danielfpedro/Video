<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArtistsVideos Controller
 *
 * @property \App\Model\Table\ArtistsVideosTable $ArtistsVideos
 */
class ArtistsVideosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Videos', 'Artists']
        ];
        $this->set('artistsVideos', $this->paginate($this->ArtistsVideos));
        $this->set('_serialize', ['artistsVideos']);
    }

    /**
     * View method
     *
     * @param string|null $id Artists Video id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artistsVideo = $this->ArtistsVideos->get($id, [
            'contain' => ['Videos', 'Artists']
        ]);
        $this->set('artistsVideo', $artistsVideo);
        $this->set('_serialize', ['artistsVideo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artistsVideo = $this->ArtistsVideos->newEntity();
        if ($this->request->is('post')) {
            $artistsVideo = $this->ArtistsVideos->patchEntity($artistsVideo, $this->request->data);
            if ($this->ArtistsVideos->save($artistsVideo)) {
                $this->Flash->success('The artists video has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artists video could not be saved. Please, try again.');
            }
        }
        $videos = $this->ArtistsVideos->Videos->find('list', ['limit' => 200]);
        $artists = $this->ArtistsVideos->Artists->find('list', ['limit' => 200]);
        $this->set(compact('artistsVideo', 'videos', 'artists'));
        $this->set('_serialize', ['artistsVideo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Artists Video id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artistsVideo = $this->ArtistsVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artistsVideo = $this->ArtistsVideos->patchEntity($artistsVideo, $this->request->data);
            if ($this->ArtistsVideos->save($artistsVideo)) {
                $this->Flash->success('The artists video has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artists video could not be saved. Please, try again.');
            }
        }
        $videos = $this->ArtistsVideos->Videos->find('list', ['limit' => 200]);
        $artists = $this->ArtistsVideos->Artists->find('list', ['limit' => 200]);
        $this->set(compact('artistsVideo', 'videos', 'artists'));
        $this->set('_serialize', ['artistsVideo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Artists Video id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artistsVideo = $this->ArtistsVideos->get($id);
        if ($this->ArtistsVideos->delete($artistsVideo)) {
            $this->Flash->success('The artists video has been deleted.');
        } else {
            $this->Flash->error('The artists video could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
