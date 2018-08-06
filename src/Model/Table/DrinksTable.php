<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drinks Model
 *
 * @property \App\Model\Table\DrinkOrdersTable|\Cake\ORM\Association\HasMany $DrinkOrders
 *
 * @method \App\Model\Entity\Drink get($primaryKey, $options = [])
 * @method \App\Model\Entity\Drink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Drink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Drink|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Drink|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Drink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Drink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Drink findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DrinksTable extends Table
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

        $this->setTable('drinks');
        $this->setDisplayField('drink');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('DrinkOrders', [
            'foreignKey' => 'drink_id'
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
            ->scalar('drink')
            ->maxLength('drink', 64)
            ->requirePresence('drink', 'create')
            ->notEmpty('drink');

        $validator
            ->scalar('size')
            ->maxLength('size', 64)
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
