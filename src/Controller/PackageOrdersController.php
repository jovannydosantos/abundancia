<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PackageOrders Controller
 *
 * @property \App\Model\Table\PackageOrdersTable $PackageOrders
 *
 * @method \App\Model\Entity\PackageOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackageOrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Packages', 'Users', 'Directions']
        ];
        $packageOrders = $this->paginate($this->PackageOrders);

        $this->set(compact('packageOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Package Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageOrder = $this->PackageOrders->get($id, [
            'contain' => ['Packages', 'Users', 'Directions', 'Payments']
        ]);

        $this->set('packageOrder', $packageOrder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageOrder = $this->PackageOrders->newEntity();
        if ($this->request->is('post')) {
            $packageOrder = $this->PackageOrders->patchEntity($packageOrder, $this->request->getData());
            if ($this->PackageOrders->save($packageOrder)) {
                $this->Flash->success(__('The package order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package order could not be saved. Please, try again.'));
        }
        $packages = $this->PackageOrders->Packages->find('list', ['limit' => 200]);
        $users = $this->PackageOrders->Users->find('list', ['limit' => 200]);
        $directions = $this->PackageOrders->Directions->find('list', ['limit' => 200]);
        $this->set(compact('packageOrder', 'packages', 'users', 'directions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageOrder = $this->PackageOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageOrder = $this->PackageOrders->patchEntity($packageOrder, $this->request->getData());
            if ($this->PackageOrders->save($packageOrder)) {
                $this->Flash->success(__('The package order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package order could not be saved. Please, try again.'));
        }
        $packages = $this->PackageOrders->Packages->find('list', ['limit' => 200]);
        $users = $this->PackageOrders->Users->find('list', ['limit' => 200]);
        $directions = $this->PackageOrders->Directions->find('list', ['limit' => 200]);
        $this->set(compact('packageOrder', 'packages', 'users', 'directions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageOrder = $this->PackageOrders->get($id);
        if ($this->PackageOrders->delete($packageOrder)) {
            $this->Flash->success(__('The package order has been deleted.'));
        } else {
            $this->Flash->error(__('The package order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
