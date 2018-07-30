<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Garnishes Controller
 *
 * @property \App\Model\Table\GarnishesTable $Garnishes
 *
 * @method \App\Model\Entity\Garnish[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GarnishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $garnishes = $this->paginate($this->Garnishes);

        $this->set(compact('garnishes'));
    }

    /**
     * View method
     *
     * @param string|null $id Garnish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $garnish = $this->Garnishes->get($id, [
            'contain' => ['ExtraGarnishes']
        ]);

        $this->set('garnish', $garnish);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $garnish = $this->Garnishes->newEntity();
        if ($this->request->is('post')) {
            $garnish = $this->Garnishes->patchEntity($garnish, $this->request->getData());
            if ($this->Garnishes->save($garnish)) {
                $this->Flash->success(__('The garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The garnish could not be saved. Please, try again.'));
        }
        $this->set(compact('garnish'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Garnish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $garnish = $this->Garnishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $garnish = $this->Garnishes->patchEntity($garnish, $this->request->getData());
            if ($this->Garnishes->save($garnish)) {
                $this->Flash->success(__('The garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The garnish could not be saved. Please, try again.'));
        }
        $this->set(compact('garnish'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Garnish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $garnish = $this->Garnishes->get($id);
        if ($this->Garnishes->delete($garnish)) {
            $this->Flash->success(__('The garnish has been deleted.'));
        } else {
            $this->Flash->error(__('The garnish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
