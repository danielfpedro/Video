<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VideosTags Controller
 *
 * @property \App\Model\Table\VideosTagsTable $VideosTags
 */
class VideosTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Videos', 'Tags']
        ];
        $this->set('videosTags', $this->paginate($this->VideosTags));
        $this->set('_serialize', ['videosTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Videos Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $videosTag = $this->VideosTags->get($id, [
            'contain' => ['Videos', 'Tags']
        ]);
        $this->set('videosTag', $videosTag);
        $this->set('_serialize', ['videosTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $videosTag = $this->VideosTags->newEntity();
        if ($this->request->is('post')) {
            $videosTag = $this->VideosTags->patchEntity($videosTag, $this->request->data);
            if ($this->VideosTags->save($videosTag)) {
                $this->Flash->success('The videos tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The videos tag could not be saved. Please, try again.');
            }
        }
        $videos = $this->VideosTags->Videos->find('list', ['limit' => 200]);
        $tags = $this->VideosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('videosTag', 'videos', 'tags'));
        $this->set('_serialize', ['videosTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Videos Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $videosTag = $this->VideosTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosTag = $this->VideosTags->patchEntity($videosTag, $this->request->data);
            if ($this->VideosTags->save($videosTag)) {
                $this->Flash->success('The videos tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The videos tag could not be saved. Please, try again.');
            }
        }
        $videos = $this->VideosTags->Videos->find('list', ['limit' => 200]);
        $tags = $this->VideosTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('videosTag', 'videos', 'tags'));
        $this->set('_serialize', ['videosTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Videos Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosTag = $this->VideosTags->get($id);
        if ($this->VideosTags->delete($videosTag)) {
            $this->Flash->success('The videos tag has been deleted.');
        } else {
            $this->Flash->error('The videos tag could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
