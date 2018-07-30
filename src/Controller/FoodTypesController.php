<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FoodTypes Controller
 *
 * @property \App\Model\Table\FoodTypesTable $FoodTypes
 *
 * @method \App\Model\Entity\FoodType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $foodTypes = $this->paginate($this->FoodTypes);

        $this->set(compact('foodTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Food Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foodType = $this->FoodTypes->get($id, [
            'contain' => ['Foods']
        ]);

        $this->set('foodType', $foodType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foodType = $this->FoodTypes->newEntity();
        if ($this->request->is('post')) {
            $foodType = $this->FoodTypes->patchEntity($foodType, $this->request->getData());
            if ($this->FoodTypes->save($foodType)) {
                $this->Flash->success(__('The food type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food type could not be saved. Please, try again.'));
        }
        $this->set(compact('foodType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foodType = $this->FoodTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foodType = $this->FoodTypes->patchEntity($foodType, $this->request->getData());
            if ($this->FoodTypes->save($foodType)) {
                $this->Flash->success(__('The food type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food type could not be saved. Please, try again.'));
        }
        $this->set(compact('foodType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foodType = $this->FoodTypes->get($id);
        if ($this->FoodTypes->delete($foodType)) {
            $this->Flash->success(__('The food type has been deleted.'));
        } else {
            $this->Flash->error(__('The food type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
