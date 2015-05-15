<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Artists Controller
 *
 * @property \App\Model\Table\ArtistsTable $Artists
 */
class ArtistsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('artists', $this->paginate($this->Artists));
        $this->set('_serialize', ['artists']);
    }

    /**
     * View method
     *
     * @param string|null $id Artist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => ['Videos', 'Tags']
        ]);
        $this->set('artist', $artist);
        $this->set('_serialize', ['artist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artist = $this->Artists->newEntity();
        if ($this->request->is('post')) {
            $artist = $this->Artists->patchEntity($artist, $this->request->data);
            if ($this->Artists->save($artist)) {
                $this->Flash->success('The artist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artist could not be saved. Please, try again.');
            }
        }
        $videos = $this->Artists->Videos->find('list', ['limit' => 200]);
        $tags = $this->Artists->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artist', 'videos', 'tags'));
        $this->set('_serialize', ['artist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Artist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => ['Videos', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artist = $this->Artists->patchEntity($artist, $this->request->data);
            if ($this->Artists->save($artist)) {
                $this->Flash->success('The artist has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artist could not be saved. Please, try again.');
            }
        }
        $videos = $this->Artists->Videos->find('list', ['limit' => 200]);
        $tags = $this->Artists->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artist', 'videos', 'tags'));
        $this->set('_serialize', ['artist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Artist id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artist = $this->Artists->get($id);
        if ($this->Artists->delete($artist)) {
            $this->Flash->success('The artist has been deleted.');
        } else {
            $this->Flash->error('The artist could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
