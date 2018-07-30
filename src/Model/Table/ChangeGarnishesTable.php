<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChangeGarnishes Model
 *
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\BelongsTo $FoodOrders
 * @property \App\Model\Table\ActualGarnishesTable|\Cake\ORM\Association\BelongsTo $ActualGarnishes
 * @property \App\Model\Table\NewGarnishesTable|\Cake\ORM\Association\BelongsTo $NewGarnishes
 *
 * @method \App\Model\Entity\ChangeGarnish get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChangeGarnish newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChangeGarnish[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChangeGarnish|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChangeGarnish|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChangeGarnish patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChangeGarnish[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChangeGarnish findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChangeGarnishesTable extends Table
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

        $this->setTable('change_garnishes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FoodOrders', [
            'foreignKey' => 'food_order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ActualGarnishes', [
            'foreignKey' => 'actual_garnish_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('NewGarnishes', [
            'foreignKey' => 'new_garnish_id',
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
        $rules->add($rules->existsIn(['actual_garnish_id'], 'ActualGarnishes'));
        $rules->add($rules->existsIn(['new_garnish_id'], 'NewGarnishes'));

        return $rules;
    }
}
