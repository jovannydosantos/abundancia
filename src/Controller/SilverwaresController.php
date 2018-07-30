<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Silverwares Controller
 *
 * @property \App\Model\Table\SilverwaresTable $Silverwares
 *
 * @method \App\Model\Entity\Silverware[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SilverwaresController extends AppController
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
        $silverwares = $this->paginate($this->Silverwares);

        $this->set(compact('silverwares'));
    }

    /**
     * View method
     *
     * @param string|null $id Silverware id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $silverware = $this->Silverwares->get($id, [
            'contain' => ['FoodOrders']
        ]);

        $this->set('silverware', $silverware);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $silverware = $this->Silverwares->newEntity();
        if ($this->request->is('post')) {
            $silverware = $this->Silverwares->patchEntity($silverware, $this->request->getData());
            if ($this->Silverwares->save($silverware)) {
                $this->Flash->success(__('The silverware has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The silverware could not be saved. Please, try again.'));
        }
        $foodOrders = $this->Silverwares->FoodOrders->find('list', ['limit' => 200]);
        $this->set(compact('silverware', 'foodOrders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Silverware id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $silverware = $this->Silverwares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $silverware = $this->Silverwares->patchEntity($silverware, $this->request->getData());
            if ($this->Silverwares->save($silverware)) {
                $this->Flash->success(__('The silverware has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The silverware could not be saved. Please, try again.'));
        }
        $foodOrders = $this->Silverwares->FoodOrders->find('list', ['limit' => 200]);
        $this->set(compact('silverware', 'foodOrders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Silverware id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $silverware = $this->Silverwares->get($id);
        if ($this->Silverwares->delete($silverware)) {
            $this->Flash->success(__('The silverware has been deleted.'));
        } else {
            $this->Flash->error(__('The silverware could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
