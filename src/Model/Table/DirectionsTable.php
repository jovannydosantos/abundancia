<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Directions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\HasMany $Orders
 * @property |\Cake\ORM\Association\HasMany $PackageOrders
 *
 * @method \App\Model\Entity\Direction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direction|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DirectionsTable extends Table
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

        $this->setTable('directions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'direction_id'
        ]);
        $this->hasMany('PackageOrders', [
            'foreignKey' => 'direction_id'
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
            ->scalar('state')
            ->maxLength('state', 64)
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('city')
            ->maxLength('city', 64)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('subdivision')
            ->maxLength('subdivision', 64)
            ->requirePresence('subdivision', 'create')
            ->notEmpty('subdivision');

        $validator
            ->integer('zip')
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');

        $validator
            ->scalar('street')
            ->maxLength('street', 128)
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->scalar('deparment')
            ->maxLength('deparment', 64)
            ->requirePresence('deparment', 'create')
            ->notEmpty('deparment');

        $validator
            ->integer('apartment_floor')
            ->requirePresence('apartment_floor', 'create')
            ->notEmpty('apartment_floor');

        $validator
            ->scalar('door')
            ->maxLength('door', 8)
            ->requirePresence('door', 'create')
            ->notEmpty('door');

        $validator
            ->integer('arrival_option')
            ->requirePresence('arrival_option', 'create')
            ->notEmpty('arrival_option');

        $validator
            ->numeric('latitude')
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->numeric('longitude')
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
