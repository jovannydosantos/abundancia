<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $type_order
 * @property int $order_id
 * @property int $package_order_id
 * @property int $type_pay
 * @property float $total
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\PackageOrder $package_order
 * @property \App\Model\Entity\User $user
 */
class Payment extends Entity
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
        'type_order' => true,
        'order_id' => true,
        'package_order_id' => true,
        'type_pay' => true,
        'total' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
        'package_order' => true,
        'user' => true
    ];
}
