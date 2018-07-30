<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Directions Controller
 *
 * @property \App\Model\Table\DirectionsTable $Directions
 *
 * @method \App\Model\Entity\Direction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DirectionsController extends AppController
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
        $directions = $this->paginate($this->Directions);

        $this->set(compact('directions'));
    }

    /**
     * View method
     *
     * @param string|null $id Direction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direction = $this->Directions->get($id, [
            'contain' => ['Users', 'Orders']
        ]);

        $this->set('direction', $direction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direction = $this->Directions->newEntity();
        if ($this->request->is('post')) {
            $direction = $this->Directions->patchEntity($direction, $this->request->getData());
            if ($this->Directions->save($direction)) {
                $this->Flash->success(__('The direction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direction could not be saved. Please, try again.'));
        }
        $users = $this->Directions->Users->find('list', ['limit' => 200]);
        $this->set(compact('direction', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Direction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direction = $this->Directions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direction = $this->Directions->patchEntity($direction, $this->request->getData());
            if ($this->Directions->save($direction)) {
                $this->Flash->success(__('The direction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direction could not be saved. Please, try again.'));
        }
        $users = $this->Directions->Users->find('list', ['limit' => 200]);
        $this->set(compact('direction', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Direction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direction = $this->Directions->get($id);
        if ($this->Directions->delete($direction)) {
            $this->Flash->success(__('The direction has been deleted.'));
        } else {
            $this->Flash->error(__('The direction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
