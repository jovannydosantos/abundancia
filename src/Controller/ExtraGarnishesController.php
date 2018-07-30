<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtraGarnishes Controller
 *
 * @property \App\Model\Table\ExtraGarnishesTable $ExtraGarnishes
 *
 * @method \App\Model\Entity\ExtraGarnish[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtraGarnishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Garnishes', 'Orders']
        ];
        $extraGarnishes = $this->paginate($this->ExtraGarnishes);

        $this->set(compact('extraGarnishes'));
    }

    /**
     * View method
     *
     * @param string|null $id Extra Garnish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraGarnish = $this->ExtraGarnishes->get($id, [
            'contain' => ['Garnishes', 'Orders']
        ]);

        $this->set('extraGarnish', $extraGarnish);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extraGarnish = $this->ExtraGarnishes->newEntity();
        if ($this->request->is('post')) {
            $extraGarnish = $this->ExtraGarnishes->patchEntity($extraGarnish, $this->request->getData());
            if ($this->ExtraGarnishes->save($extraGarnish)) {
                $this->Flash->success(__('The extra garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra garnish could not be saved. Please, try again.'));
        }
        $garnishes = $this->ExtraGarnishes->Garnishes->find('list', ['limit' => 200]);
        $orders = $this->ExtraGarnishes->Orders->find('list', ['limit' => 200]);
        $this->set(compact('extraGarnish', 'garnishes', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extra Garnish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extraGarnish = $this->ExtraGarnishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraGarnish = $this->ExtraGarnishes->patchEntity($extraGarnish, $this->request->getData());
            if ($this->ExtraGarnishes->save($extraGarnish)) {
                $this->Flash->success(__('The extra garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra garnish could not be saved. Please, try again.'));
        }
        $garnishes = $this->ExtraGarnishes->Garnishes->find('list', ['limit' => 200]);
        $orders = $this->ExtraGarnishes->Orders->find('list', ['limit' => 200]);
        $this->set(compact('extraGarnish', 'garnishes', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extra Garnish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extraGarnish = $this->ExtraGarnishes->get($id);
        if ($this->ExtraGarnishes->delete($extraGarnish)) {
            $this->Flash->success(__('The extra garnish has been deleted.'));
        } else {
            $this->Flash->error(__('The extra garnish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
