<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tuppers Controller
 *
 * @property \App\Model\Table\TuppersTable $Tuppers
 *
 * @method \App\Model\Entity\Tupper[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TuppersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FoodOrders']
        ];
        $tuppers = $this->paginate($this->Tuppers);

        $this->set(compact('tuppers'));
    }

    /**
     * View method
     *
     * @param string|null $id Tupper id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tupper = $this->Tuppers->get($id, [
            'contain' => ['FoodOrders']
        ]);

        $this->set('tupper', $tupper);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tupper = $this->Tuppers->newEntity();
        if ($this->request->is('post')) {
            $tupper = $this->Tuppers->patchEntity($tupper, $this->request->getData());
            if ($this->Tuppers->save($tupper)) {
                $this->Flash->success(__('The tupper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tupper could not be saved. Please, try again.'));
        }
        $foodOrders = $this->Tuppers->FoodOrders->find('list', ['limit' => 200]);
        $this->set(compact('tupper', 'foodOrders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tupper id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tupper = $this->Tuppers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tupper = $this->Tuppers->patchEntity($tupper, $this->request->getData());
            if ($this->Tuppers->save($tupper)) {
                $this->Flash->success(__('The tupper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tupper could not be saved. Please, try again.'));
        }
        $foodOrders = $this->Tuppers->FoodOrders->find('list', ['limit' => 200]);
        $this->set(compact('tupper', 'foodOrders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tupper id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tupper = $this->Tuppers->get($id);
        if ($this->Tuppers->delete($tupper)) {
            $this->Flash->success(__('The tupper has been deleted.'));
        } else {
            $this->Flash->error(__('The tupper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
