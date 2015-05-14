<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VideosPlaylists Controller
 *
 * @property \App\Model\Table\VideosPlaylistsTable $VideosPlaylists
 */
class VideosPlaylistsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Videos', 'Playlists']
        ];
        $this->set('videosPlaylists', $this->paginate($this->VideosPlaylists));
        $this->set('_serialize', ['videosPlaylists']);
    }

    /**
     * View method
     *
     * @param string|null $id Videos Playlist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $videosPlaylist = $this->VideosPlaylists->get($id, [
            'contain' => ['Videos', 'Playlists']
        ]);
        $this->set('videosPlaylist', $videosPlaylist);
        $this->set('_serialize', ['videosPlaylist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $videosPlaylist = $this->VideosPlaylists->newEntity();
        if ($this->request->is('post')) {
            $videosPlaylist = $this->VideosPlaylists->patchEntity($videosPlaylist, $this->request->data);
            if ($this->VideosPlaylists->save($videosPlaylist)) {
                $this->Flash->success('The videos playlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The videos playlist could not be saved. Please, try again.');
            }
        }
        $videos = $this->VideosPlaylists->Videos->find('list', ['limit' => 200]);
        $playlists = $this->VideosPlaylists->Playlists->find('list', ['limit' => 200]);
        $this->set(compact('videosPlaylist', 'videos', 'playlists'));
        $this->set('_serialize', ['videosPlaylist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Videos Playlist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $videosPlaylist = $this->VideosPlaylists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosPlaylist = $this->VideosPlaylists->patchEntity($videosPlaylist, $this->request->data);
            if ($this->VideosPlaylists->save($videosPlaylist)) {
                $this->Flash->success('The videos playlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The videos playlist could not be saved. Please, try again.');
            }
        }
        $videos = $this->VideosPlaylists->Videos->find('list', ['limit' => 200]);
        $playlists = $this->VideosPlaylists->Playlists->find('list', ['limit' => 200]);
        $this->set(compact('videosPlaylist', 'videos', 'playlists'));
        $this->set('_serialize', ['videosPlaylist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Videos Playlist id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosPlaylist = $this->VideosPlaylists->get($id);
        if ($this->VideosPlaylists->delete($videosPlaylist)) {
            $this->Flash->success('The videos playlist has been deleted.');
        } else {
            $this->Flash->error('The videos playlist could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
