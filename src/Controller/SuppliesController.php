<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Supplies Controller
 *
 * @property \App\Model\Table\SuppliesTable $Supplies
 *
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuppliesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $supplies = $this->paginate($this->Supplies);

        $this->set(compact('supplies'));
    }

    /**
     * View method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supply = $this->Supplies->get($id, [
            'contain' => []
        ]);

        $this->set('supply', $supply);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supply = $this->Supplies->newEntity();
        if ($this->request->is('post')) {
            $supply = $this->Supplies->patchEntity($supply, $this->request->getData());
            if ($this->Supplies->save($supply)) {
                $this->Flash->success(__('The supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supply could not be saved. Please, try again.'));
        }
        $this->set(compact('supply'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supply = $this->Supplies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supply = $this->Supplies->patchEntity($supply, $this->request->getData());
            if ($this->Supplies->save($supply)) {
                $this->Flash->success(__('The supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supply could not be saved. Please, try again.'));
        }
        $this->set(compact('supply'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supply = $this->Supplies->get($id);
        if ($this->Supplies->delete($supply)) {
            $this->Flash->success(__('The supply has been deleted.'));
        } else {
            $this->Flash->error(__('The supply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
