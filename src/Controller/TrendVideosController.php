<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrendVideos Controller
 *
 * @property \App\Model\Table\TrendVideosTable $TrendVideos
 */
class TrendVideosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Videos']
        ];
        $this->set('trendVideos', $this->paginate($this->TrendVideos));
        $this->set('_serialize', ['trendVideos']);
    }

    /**
     * View method
     *
     * @param string|null $id Trend Video id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trendVideo = $this->TrendVideos->get($id, [
            'contain' => ['Videos']
        ]);
        $this->set('trendVideo', $trendVideo);
        $this->set('_serialize', ['trendVideo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trendVideo = $this->TrendVideos->newEntity();
        if ($this->request->is('post')) {
            $trendVideo = $this->TrendVideos->patchEntity($trendVideo, $this->request->data);
            if ($this->TrendVideos->save($trendVideo)) {
                $this->Flash->success('The trend video has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend video could not be saved. Please, try again.');
            }
        }
        $videos = $this->TrendVideos->Videos->find('list', ['limit' => 200]);
        $this->set(compact('trendVideo', 'videos'));
        $this->set('_serialize', ['trendVideo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trend Video id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trendVideo = $this->TrendVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trendVideo = $this->TrendVideos->patchEntity($trendVideo, $this->request->data);
            if ($this->TrendVideos->save($trendVideo)) {
                $this->Flash->success('The trend video has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The trend video could not be saved. Please, try again.');
            }
        }
        $videos = $this->TrendVideos->Videos->find('list', ['limit' => 200]);
        $this->set(compact('trendVideo', 'videos'));
        $this->set('_serialize', ['trendVideo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trend Video id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trendVideo = $this->TrendVideos->get($id);
        if ($this->TrendVideos->delete($trendVideo)) {
            $this->Flash->success('The trend video has been deleted.');
        } else {
            $this->Flash->error('The trend video could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
