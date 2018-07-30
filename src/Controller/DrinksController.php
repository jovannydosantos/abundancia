<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Drinks Controller
 *
 * @property \App\Model\Table\DrinksTable $Drinks
 *
 * @method \App\Model\Entity\Drink[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrinksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $drinks = $this->paginate($this->Drinks);

        $this->set(compact('drinks'));
    }

    /**
     * View method
     *
     * @param string|null $id Drink id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drink = $this->Drinks->get($id, [
            'contain' => ['DrinkOrders']
        ]);

        $this->set('drink', $drink);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drink = $this->Drinks->newEntity();
        if ($this->request->is('post')) {
            $drink = $this->Drinks->patchEntity($drink, $this->request->getData());
            if ($this->Drinks->save($drink)) {
                $this->Flash->success(__('The drink has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drink could not be saved. Please, try again.'));
        }
        $this->set(compact('drink'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drink id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drink = $this->Drinks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drink = $this->Drinks->patchEntity($drink, $this->request->getData());
            if ($this->Drinks->save($drink)) {
                $this->Flash->success(__('The drink has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drink could not be saved. Please, try again.'));
        }
        $this->set(compact('drink'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drink id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drink = $this->Drinks->get($id);
        if ($this->Drinks->delete($drink)) {
            $this->Flash->success(__('The drink has been deleted.'));
        } else {
            $this->Flash->error(__('The drink could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
