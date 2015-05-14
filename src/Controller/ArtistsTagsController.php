<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArtistsTags Controller
 *
 * @property \App\Model\Table\ArtistsTagsTable $ArtistsTags
 */
class ArtistsTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artists', 'Tags']
        ];
        $this->set('artistsTags', $this->paginate($this->ArtistsTags));
        $this->set('_serialize', ['artistsTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Artists Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artistsTag = $this->ArtistsTags->get($id, [
            'contain' => ['Artists', 'Tags']
        ]);
        $this->set('artistsTag', $artistsTag);
        $this->set('_serialize', ['artistsTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artistsTag = $this->ArtistsTags->newEntity();
        if ($this->request->is('post')) {
            $artistsTag = $this->ArtistsTags->patchEntity($artistsTag, $this->request->data);
            if ($this->ArtistsTags->save($artistsTag)) {
                $this->Flash->success('The artists tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artists tag could not be saved. Please, try again.');
            }
        }
        $artists = $this->ArtistsTags->Artists->find('list', ['limit' => 200]);
        $tags = $this->ArtistsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artistsTag', 'artists', 'tags'));
        $this->set('_serialize', ['artistsTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Artists Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artistsTag = $this->ArtistsTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artistsTag = $this->ArtistsTags->patchEntity($artistsTag, $this->request->data);
            if ($this->ArtistsTags->save($artistsTag)) {
                $this->Flash->success('The artists tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The artists tag could not be saved. Please, try again.');
            }
        }
        $artists = $this->ArtistsTags->Artists->find('list', ['limit' => 200]);
        $tags = $this->ArtistsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artistsTag', 'artists', 'tags'));
        $this->set('_serialize', ['artistsTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Artists Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artistsTag = $this->ArtistsTags->get($id);
        if ($this->ArtistsTags->delete($artistsTag)) {
            $this->Flash->success('The artists tag has been deleted.');
        } else {
            $this->Flash->error('The artists tag could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
