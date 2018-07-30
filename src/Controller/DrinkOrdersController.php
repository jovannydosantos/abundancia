<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DrinkOrders Controller
 *
 * @property \App\Model\Table\DrinkOrdersTable $DrinkOrders
 *
 * @method \App\Model\Entity\DrinkOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrinkOrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Drinks']
        ];
        $drinkOrders = $this->paginate($this->DrinkOrders);

        $this->set(compact('drinkOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Drink Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drinkOrder = $this->DrinkOrders->get($id, [
            'contain' => ['Orders', 'Drinks']
        ]);

        $this->set('drinkOrder', $drinkOrder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drinkOrder = $this->DrinkOrders->newEntity();
        if ($this->request->is('post')) {
            $drinkOrder = $this->DrinkOrders->patchEntity($drinkOrder, $this->request->getData());
            if ($this->DrinkOrders->save($drinkOrder)) {
                $this->Flash->success(__('The drink order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drink order could not be saved. Please, try again.'));
        }
        $orders = $this->DrinkOrders->Orders->find('list', ['limit' => 200]);
        $drinks = $this->DrinkOrders->Drinks->find('list', ['limit' => 200]);
        $this->set(compact('drinkOrder', 'orders', 'drinks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drink Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drinkOrder = $this->DrinkOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drinkOrder = $this->DrinkOrders->patchEntity($drinkOrder, $this->request->getData());
            if ($this->DrinkOrders->save($drinkOrder)) {
                $this->Flash->success(__('The drink order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drink order could not be saved. Please, try again.'));
        }
        $orders = $this->DrinkOrders->Orders->find('list', ['limit' => 200]);
        $drinks = $this->DrinkOrders->Drinks->find('list', ['limit' => 200]);
        $this->set(compact('drinkOrder', 'orders', 'drinks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drink Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drinkOrder = $this->DrinkOrders->get($id);
        if ($this->DrinkOrders->delete($drinkOrder)) {
            $this->Flash->success(__('The drink order has been deleted.'));
        } else {
            $this->Flash->error(__('The drink order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
