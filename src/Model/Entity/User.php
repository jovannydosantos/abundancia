<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property int $role_id
 * @property bool $status
 * @property string $name
 * @property string $last_name
 * @property string $telephone
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Delivery[] $deliveries
 * @property \App\Model\Entity\Direction[] $directions
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\PackageOrder[] $package_orders
 * @property \App\Model\Entity\Payment[] $payments
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'role_id' => true,
        'status' => true,
        'name' => true,
        'last_name' => true,
        'telephone' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'deliveries' => true,
        'directions' => true,
        'orders' => true,
        'package_orders' => true,
        'payments' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
