<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Garnishes Model
 *
 * @property \App\Model\Table\ExtraGarnishesTable|\Cake\ORM\Association\HasMany $ExtraGarnishes
 *
 * @method \App\Model\Entity\Garnish get($primaryKey, $options = [])
 * @method \App\Model\Entity\Garnish newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Garnish[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Garnish|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Garnish|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Garnish patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Garnish[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Garnish findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GarnishesTable extends Table
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

        $this->setTable('garnishes');
        $this->setDisplayField('garnish');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ExtraGarnishes', [
            'foreignKey' => 'garnish_id'
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
            ->scalar('garnish')
            ->maxLength('garnish', 64)
            ->requirePresence('garnish', 'create')
            ->notEmpty('garnish');

        $validator
            ->scalar('size')
            ->maxLength('size', 64)
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        return $validator;
    }
}
