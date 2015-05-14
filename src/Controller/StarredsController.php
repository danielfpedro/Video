<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Starreds Controller
 *
 * @property \App\Model\Table\StarredsTable $Starreds
 */
class StarredsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Videos']
        ];
        $this->set('starreds', $this->paginate($this->Starreds));
        $this->set('_serialize', ['starreds']);
    }

    /**
     * View method
     *
     * @param string|null $id Starred id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $starred = $this->Starreds->get($id, [
            'contain' => ['Users', 'Videos']
        ]);
        $this->set('starred', $starred);
        $this->set('_serialize', ['starred']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $starred = $this->Starreds->newEntity();
        if ($this->request->is('post')) {
            $starred = $this->Starreds->patchEntity($starred, $this->request->data);
            if ($this->Starreds->save($starred)) {
                $this->Flash->success('The starred has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The starred could not be saved. Please, try again.');
            }
        }
        $users = $this->Starreds->Users->find('list', ['limit' => 200]);
        $videos = $this->Starreds->Videos->find('list', ['limit' => 200]);
        $this->set(compact('starred', 'users', 'videos'));
        $this->set('_serialize', ['starred']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Starred id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $starred = $this->Starreds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $starred = $this->Starreds->patchEntity($starred, $this->request->data);
            if ($this->Starreds->save($starred)) {
                $this->Flash->success('The starred has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The starred could not be saved. Please, try again.');
            }
        }
        $users = $this->Starreds->Users->find('list', ['limit' => 200]);
        $videos = $this->Starreds->Videos->find('list', ['limit' => 200]);
        $this->set(compact('starred', 'users', 'videos'));
        $this->set('_serialize', ['starred']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Starred id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $starred = $this->Starreds->get($id);
        if ($this->Starreds->delete($starred)) {
            $this->Flash->success('The starred has been deleted.');
        } else {
            $this->Flash->error('The starred could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
