<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FoodOrders Model
 *
 * @property \App\Model\Table\FoodsTable|\Cake\ORM\Association\BelongsTo $Foods
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 * @property \App\Model\Table\SilverwaresTable|\Cake\ORM\Association\BelongsTo $Silverwares
 * @property \App\Model\Table\ChangeGarnishesTable|\Cake\ORM\Association\HasMany $ChangeGarnishes
 * @property \App\Model\Table\SilverwaresTable|\Cake\ORM\Association\HasMany $Silverwares
 *
 * @method \App\Model\Entity\FoodOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\FoodOrder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FoodOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FoodOrder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FoodOrder|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FoodOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FoodOrder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FoodOrder findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FoodOrdersTable extends Table
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

        $this->setTable('food_orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Foods', [
            'foreignKey' => 'food_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Silverwares', [
            'foreignKey' => 'silverware_id'
        ]);
        $this->hasMany('ChangeGarnishes', [
            'foreignKey' => 'food_order_id'
        ]);
        $this->hasMany('Silverwares', [
            'foreignKey' => 'food_order_id'
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
            ->scalar('special_requirements')
            ->requirePresence('special_requirements', 'create')
            ->notEmpty('special_requirements');

        $validator
            ->numeric('price_special_requirements')
            ->requirePresence('price_special_requirements', 'create')
            ->notEmpty('price_special_requirements');

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
        $rules->add($rules->existsIn(['food_id'], 'Foods'));
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['silverware_id'], 'Silverwares'));

        return $rules;
    }
}
