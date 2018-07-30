<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChangeGarnishes Controller
 *
 * @property \App\Model\Table\ChangeGarnishesTable $ChangeGarnishes
 *
 * @method \App\Model\Entity\ChangeGarnish[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChangeGarnishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FoodOrders', 'ActualGarnishes', 'NewGarnishes']
        ];
        $changeGarnishes = $this->paginate($this->ChangeGarnishes);

        $this->set(compact('changeGarnishes'));
    }

    /**
     * View method
     *
     * @param string|null $id Change Garnish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changeGarnish = $this->ChangeGarnishes->get($id, [
            'contain' => ['FoodOrders', 'ActualGarnishes', 'NewGarnishes']
        ]);

        $this->set('changeGarnish', $changeGarnish);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changeGarnish = $this->ChangeGarnishes->newEntity();
        if ($this->request->is('post')) {
            $changeGarnish = $this->ChangeGarnishes->patchEntity($changeGarnish, $this->request->getData());
            if ($this->ChangeGarnishes->save($changeGarnish)) {
                $this->Flash->success(__('The change garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The change garnish could not be saved. Please, try again.'));
        }
        $foodOrders = $this->ChangeGarnishes->FoodOrders->find('list', ['limit' => 200]);
        $actualGarnishes = $this->ChangeGarnishes->ActualGarnishes->find('list', ['limit' => 200]);
        $newGarnishes = $this->ChangeGarnishes->NewGarnishes->find('list', ['limit' => 200]);
        $this->set(compact('changeGarnish', 'foodOrders', 'actualGarnishes', 'newGarnishes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Change Garnish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changeGarnish = $this->ChangeGarnishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changeGarnish = $this->ChangeGarnishes->patchEntity($changeGarnish, $this->request->getData());
            if ($this->ChangeGarnishes->save($changeGarnish)) {
                $this->Flash->success(__('The change garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The change garnish could not be saved. Please, try again.'));
        }
        $foodOrders = $this->ChangeGarnishes->FoodOrders->find('list', ['limit' => 200]);
        $actualGarnishes = $this->ChangeGarnishes->ActualGarnishes->find('list', ['limit' => 200]);
        $newGarnishes = $this->ChangeGarnishes->NewGarnishes->find('list', ['limit' => 200]);
        $this->set(compact('changeGarnish', 'foodOrders', 'actualGarnishes', 'newGarnishes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Change Garnish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changeGarnish = $this->ChangeGarnishes->get($id);
        if ($this->ChangeGarnishes->delete($changeGarnish)) {
            $this->Flash->success(__('The change garnish has been deleted.'));
        } else {
            $this->Flash->error(__('The change garnish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
