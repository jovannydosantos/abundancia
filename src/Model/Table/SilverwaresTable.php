<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Silverwares Model
 *
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\BelongsTo $FoodOrders
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\HasMany $FoodOrders
 *
 * @method \App\Model\Entity\Silverware get($primaryKey, $options = [])
 * @method \App\Model\Entity\Silverware newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Silverware[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Silverware|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Silverware|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Silverware patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Silverware[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Silverware findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SilverwaresTable extends Table
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

        $this->setTable('silverwares');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FoodOrders', [
            'foreignKey' => 'food_order_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('FoodOrders', [
            'foreignKey' => 'silverware_id'
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
            ->integer('silverware_type')
            ->requirePresence('silverware_type', 'create')
            ->notEmpty('silverware_type');

        $validator
            ->integer('total_silverware')
            ->requirePresence('total_silverware', 'create')
            ->notEmpty('total_silverware');

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
