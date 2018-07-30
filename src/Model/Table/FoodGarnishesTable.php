<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FoodGarnishes Model
 *
 * @property \App\Model\Table\FoodsTable|\Cake\ORM\Association\BelongsTo $Foods
 * @property \App\Model\Table\GarnishesTable|\Cake\ORM\Association\BelongsTo $Garnishes
 *
 * @method \App\Model\Entity\FoodGarnish get($primaryKey, $options = [])
 * @method \App\Model\Entity\FoodGarnish newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FoodGarnish[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FoodGarnish|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FoodGarnish|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FoodGarnish patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FoodGarnish[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FoodGarnish findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FoodGarnishesTable extends Table
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

        $this->setTable('food_garnishes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Foods', [
            'foreignKey' => 'food_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Garnishes', [
            'foreignKey' => 'garnishes_id',
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
        $rules->add($rules->existsIn(['food_id'], 'Foods'));
        $rules->add($rules->existsIn(['garnishes_id'], 'Garnishes'));

        return $rules;
    }
}
