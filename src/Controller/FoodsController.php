<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Foods Controller
 *
 * @property \App\Model\Table\FoodsTable $Foods
 *
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FoodTypes']
        ];
        $foods = $this->paginate($this->Foods);

        $this->set(compact('foods'));
    }

    /**
     * View method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => ['FoodTypes', 'FoodGarnishes', 'FoodOrders']
        ]);

        $this->set('food', $food);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $food = $this->Foods->newEntity();
        $this->loadModel('Garnishes');

        if ($this->request->is('post')) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());

            if ($result=$this->Foods->save($food)) {

                $datos= $this->request->getData();
                $id = $result->id;
                $this->loadModel('FoodGarnishes');
                $saveError=0;

                foreach ($datos['garnishes_id'] as $garnish_id):

                    $foodGarnishes = $this->FoodGarnishes->newEntity(['food_id' => $id,'garnishes_id' => $garnish_id]);

                    if (!$this->FoodGarnishes->save($foodGarnishes)) {
                        $saveError=1;
                    }
                endforeach;

                if($saveError==0):
                    $this->Flash->success('Platillo y guarniciones guardadas');
                else:
                    $this->Flash->error('Platillo guardado pero se encontraron inconvenientes al guardar las guarniciones. Verifique por favor');
                endif;
            }else{
                $this->Flash->error(__('El platillo no pudo ser guardado. Por favor, intente nuevamente.'));
            }
            return $this->redirect(['action' => 'index']);
        }
        $foodTypes = $this->Foods->FoodTypes->find('list');
        $garnishes = $this->Garnishes->find('list');
        $this->set(compact('food', 'foodTypes','garnishes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());
            if ($this->Foods->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $foodTypes = $this->Foods->FoodTypes->find('list', ['limit' => 200]);
        $this->set(compact('food', 'foodTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $food = $this->Foods->get($id);
        if ($this->Foods->delete($food)) {
            $this->Flash->success(__('The food has been deleted.'));
        } else {
            $this->Flash->error(__('The food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
