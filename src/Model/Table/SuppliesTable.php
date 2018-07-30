<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supplies Model
 *
 * @method \App\Model\Entity\Supply get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supply newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Supply[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supply|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supply|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supply patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supply[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supply findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SuppliesTable extends Table
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

        $this->setTable('supplies');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->scalar('input')
            ->maxLength('input', 128)
            ->requirePresence('input', 'create')
            ->notEmpty('input');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->numeric('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        $validator
            ->scalar('measurement')
            ->maxLength('measurement', 64)
            ->allowEmpty('measurement');

        $validator
            ->date('date_input')
            ->requirePresence('date_input', 'create')
            ->notEmpty('date_input');

        return $validator;
    }
}
