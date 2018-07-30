<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FoodOrders Controller
 *
 * @property \App\Model\Table\FoodOrdersTable $FoodOrders
 *
 * @method \App\Model\Entity\FoodOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodOrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Foods', 'Orders']
        ];
        $foodOrders = $this->paginate($this->FoodOrders);

        $this->set(compact('foodOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Food Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foodOrder = $this->FoodOrders->get($id, [
            'contain' => ['Foods', 'Orders', 'ChangeGarnishes', 'Silverwares', 'Tuppers']
        ]);

        $this->set('foodOrder', $foodOrder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foodOrder = $this->FoodOrders->newEntity();
        if ($this->request->is('post')) {
            $foodOrder = $this->FoodOrders->patchEntity($foodOrder, $this->request->getData());
            if ($this->FoodOrders->save($foodOrder)) {
                $this->Flash->success(__('The food order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food order could not be saved. Please, try again.'));
        }
        $foods = $this->FoodOrders->Foods->find('list', ['limit' => 200]);
        $orders = $this->FoodOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('foodOrder', 'foods', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foodOrder = $this->FoodOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foodOrder = $this->FoodOrders->patchEntity($foodOrder, $this->request->getData());
            if ($this->FoodOrders->save($foodOrder)) {
                $this->Flash->success(__('The food order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food order could not be saved. Please, try again.'));
        }
        $foods = $this->FoodOrders->Foods->find('list', ['limit' => 200]);
        $orders = $this->FoodOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('foodOrder', 'foods', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foodOrder = $this->FoodOrders->get($id);
        if ($this->FoodOrders->delete($foodOrder)) {
            $this->Flash->success(__('The food order has been deleted.'));
        } else {
            $this->Flash->error(__('The food order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
