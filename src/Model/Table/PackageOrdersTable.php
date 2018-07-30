<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackageOrders Model
 *
 * @property \App\Model\Table\PackagesTable|\Cake\ORM\Association\BelongsTo $Packages
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\DirectionsTable|\Cake\ORM\Association\BelongsTo $Directions
 * @property \App\Model\Table\PaymentsTable|\Cake\ORM\Association\HasMany $Payments
 *
 * @method \App\Model\Entity\PackageOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\PackageOrder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PackageOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackageOrder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PackageOrder|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PackageOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PackageOrder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackageOrder findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PackageOrdersTable extends Table
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

        $this->setTable('package_orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Packages', [
            'foreignKey' => 'package_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Directions', [
            'foreignKey' => 'direction_id'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'package_order_id'
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
            ->integer('total_packages')
            ->requirePresence('total_packages', 'create')
            ->notEmpty('total_packages');

        $validator
            ->integer('status')
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
        $rules->add($rules->existsIn(['package_id'], 'Packages'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['direction_id'], 'Directions'));

        return $rules;
    }
}
