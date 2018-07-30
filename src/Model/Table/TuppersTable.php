<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tuppers Model
 *
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\BelongsTo $FoodOrders
 *
 * @method \App\Model\Entity\Tupper get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tupper newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tupper[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tupper|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tupper|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tupper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tupper[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tupper findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TuppersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tuppers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FoodOrders', [
            'foreignKey' => 'food_order_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('delivery_status', 'create')
            ->notEmpty('delivery_status');

        $validator
            ->integer('return_status')
            ->requirePresence('return_status', 'create')
            ->notEmpty('return_status');

        $validator
            ->requirePresence('tupper_charge', 'create')
            ->notEmpty('tupper_charge');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['food_order_id'], 'FoodOrders'));

        return $rules;
    }
}
