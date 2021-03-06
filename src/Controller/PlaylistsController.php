<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Playlists Controller
 *
 * @property \App\Model\Table\PlaylistsTable $Playlists
 */
class PlaylistsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('playlists', $this->paginate($this->Playlists));
        $this->set('_serialize', ['playlists']);
    }

    /**
     * View method
     *
     * @param string|null $id Playlist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('playlist', $playlist);
        $this->set('_serialize', ['playlist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playlist = $this->Playlists->newEntity();
        if ($this->request->is('post')) {
            $playlist = $this->Playlists->patchEntity($playlist, $this->request->data);
            if ($this->Playlists->save($playlist)) {
                $this->Flash->success('The playlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The playlist could not be saved. Please, try again.');
            }
        }
        $users = $this->Playlists->Users->find('list', ['limit' => 200]);
        $this->set(compact('playlist', 'users'));
        $this->set('_serialize', ['playlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Playlist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlist = $this->Playlists->patchEntity($playlist, $this->request->data);
            if ($this->Playlists->save($playlist)) {
                $this->Flash->success('The playlist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The playlist could not be saved. Please, try again.');
            }
        }
        $users = $this->Playlists->Users->find('list', ['limit' => 200]);
        $this->set(compact('playlist', 'users'));
        $this->set('_serialize', ['playlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Playlist id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlist = $this->Playlists->get($id);
        if ($this->Playlists->delete($playlist)) {
            $this->Flash->success('The playlist has been deleted.');
        } else {
            $this->Flash->error('The playlist could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
