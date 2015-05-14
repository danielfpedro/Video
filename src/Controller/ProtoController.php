<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proto Controller
 *
 * @property \App\Model\Table\ProtoTable $Proto
 */
class ProtoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('proto', $this->paginate($this->Proto));
        $this->set('_serialize', ['proto']);
    }

    /**
     * View method
     *
     * @param string|null $id Proto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proto = $this->Proto->get($id, [
            'contain' => []
        ]);
        $this->set('proto', $proto);
        $this->set('_serialize', ['proto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proto = $this->Proto->newEntity();
        if ($this->request->is('post')) {
            $proto = $this->Proto->patchEntity($proto, $this->request->data);
            if ($this->Proto->save($proto)) {
                $this->Flash->success('The proto has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The proto could not be saved. Please, try again.');
            }
        }
        $this->set(compact('proto'));
        $this->set('_serialize', ['proto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proto = $this->Proto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proto = $this->Proto->patchEntity($proto, $this->request->data);
            if ($this->Proto->save($proto)) {
                $this->Flash->success('The proto has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The proto could not be saved. Please, try again.');
            }
        }
        $this->set(compact('proto'));
        $this->set('_serialize', ['proto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proto = $this->Proto->get($id);
        if ($this->Proto->delete($proto)) {
            $this->Flash->success('The proto has been deleted.');
        } else {
            $this->Flash->error('The proto could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
