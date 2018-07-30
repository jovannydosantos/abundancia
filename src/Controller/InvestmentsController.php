<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Investments Controller
 *
 * @property \App\Model\Table\InvestmentsTable $Investments
 *
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvestmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $investments = $this->paginate($this->Investments);

        $this->set(compact('investments'));
    }

    /**
     * View method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $investment = $this->Investments->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('investment', $investment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $investment = $this->Investments->newEntity();
        if ($this->request->is('post')) {
            $investment = $this->Investments->patchEntity($investment, $this->request->getData());
            if ($this->Investments->save($investment)) {
                $this->Flash->success(__('The investment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The investment could not be saved. Please, try again.'));
        }
        $users = $this->Investments->Users->find('list', ['limit' => 200]);
        $this->set(compact('investment', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $investment = $this->Investments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $investment = $this->Investments->patchEntity($investment, $this->request->getData());
            if ($this->Investments->save($investment)) {
                $this->Flash->success(__('The investment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The investment could not be saved. Please, try again.'));
        }
        $users = $this->Investments->Users->find('list', ['limit' => 200]);
        $this->set(compact('investment', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $investment = $this->Investments->get($id);
        if ($this->Investments->delete($investment)) {
            $this->Flash->success(__('The investment has been deleted.'));
        } else {
            $this->Flash->error(__('The investment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
