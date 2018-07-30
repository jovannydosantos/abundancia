<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FoodGarnishes Controller
 *
 * @property \App\Model\Table\FoodGarnishesTable $FoodGarnishes
 *
 * @method \App\Model\Entity\FoodGarnish[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodGarnishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Foods', 'Garnishes']
        ];
        $foodGarnishes = $this->paginate($this->FoodGarnishes);

        $this->set(compact('foodGarnishes'));
    }

    /**
     * View method
     *
     * @param string|null $id Food Garnish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foodGarnish = $this->FoodGarnishes->get($id, [
            'contain' => ['Foods', 'Garnishes']
        ]);

        $this->set('foodGarnish', $foodGarnish);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foodGarnish = $this->FoodGarnishes->newEntity();
        if ($this->request->is('post')) {
            $foodGarnish = $this->FoodGarnishes->patchEntity($foodGarnish, $this->request->getData());
            if ($this->FoodGarnishes->save($foodGarnish)) {
                $this->Flash->success(__('The food garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food garnish could not be saved. Please, try again.'));
        }
        $foods = $this->FoodGarnishes->Foods->find('list', ['limit' => 200]);
        $garnishes = $this->FoodGarnishes->Garnishes->find('list', ['limit' => 200]);
        $this->set(compact('foodGarnish', 'foods', 'garnishes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food Garnish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foodGarnish = $this->FoodGarnishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foodGarnish = $this->FoodGarnishes->patchEntity($foodGarnish, $this->request->getData());
            if ($this->FoodGarnishes->save($foodGarnish)) {
                $this->Flash->success(__('The food garnish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food garnish could not be saved. Please, try again.'));
        }
        $foods = $this->FoodGarnishes->Foods->find('list', ['limit' => 200]);
        $garnishes = $this->FoodGarnishes->Garnishes->find('list', ['limit' => 200]);
        $this->set(compact('foodGarnish', 'foods', 'garnishes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food Garnish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foodGarnish = $this->FoodGarnishes->get($id);
        if ($this->FoodGarnishes->delete($foodGarnish)) {
            $this->Flash->success(__('The food garnish has been deleted.'));
        } else {
            $this->Flash->error(__('The food garnish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
