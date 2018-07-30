<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Foods Model
 *
 * @property \App\Model\Table\FoodTypesTable|\Cake\ORM\Association\BelongsTo $FoodTypes
 * @property \App\Model\Table\FoodGarnishesTable|\Cake\ORM\Association\HasMany $FoodGarnishes
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\HasMany $FoodOrders
 *
 * @method \App\Model\Entity\Food get($primaryKey, $options = [])
 * @method \App\Model\Entity\Food newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Food[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Food|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Food[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Food findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FoodsTable extends Table
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

        $this->setTable('foods');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FoodTypes', [
            'foreignKey' => 'food_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('FoodGarnishes', [
            'foreignKey' => 'food_id'
        ]);
        $this->hasMany('FoodOrders', [
            'foreignKey' => 'food_id'
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
            ->scalar('food')
            ->maxLength('food', 64)
            ->requirePresence('food', 'create')
            ->notEmpty('food');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->date('sale_date')
            ->requirePresence('sale_date', 'create')
            ->notEmpty('sale_date');

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
        $rules->add($rules->existsIn(['food_type_id'], 'FoodTypes'));

        return $rules;
    }
}
