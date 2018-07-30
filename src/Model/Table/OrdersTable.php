<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\DirectionsTable|\Cake\ORM\Association\BelongsTo $Directions
 * @property \App\Model\Table\DeliveriesTable|\Cake\ORM\Association\HasMany $Deliveries
 * @property \App\Model\Table\DrinkOrdersTable|\Cake\ORM\Association\HasMany $DrinkOrders
 * @property \App\Model\Table\ExtraGarnishesTable|\Cake\ORM\Association\HasMany $ExtraGarnishes
 * @property \App\Model\Table\FoodOrdersTable|\Cake\ORM\Association\HasMany $FoodOrders
 * @property \App\Model\Table\PaymentsTable|\Cake\ORM\Association\HasMany $Payments
 * @property |\Cake\ORM\Association\HasMany $Tuppers
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Directions', [
            'foreignKey' => 'direction_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Deliveries', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('DrinkOrders', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('ExtraGarnishes', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('FoodOrders', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('Tuppers', [
            'foreignKey' => 'order_id'
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
            ->requirePresence('delivery', 'create')
            ->notEmpty('delivery');

        $validator
            ->numeric('price_delivery')
            ->requirePresence('price_delivery', 'create')
            ->notEmpty('price_delivery');

        $validator
            ->integer('total_vegan_food')
            ->requirePresence('total_vegan_food', 'create')
            ->notEmpty('total_vegan_food');

        $validator
            ->integer('total_normal_food')
            ->requirePresence('total_normal_food', 'create')
            ->notEmpty('total_normal_food');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['direction_id'], 'Directions'));

        return $rules;
    }
}
