<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PackageOrder Entity
 *
 * @property int $id
 * @property int $package_id
 * @property int $user_id
 * @property int $delivery
 * @property float $price_delivery
 * @property int $total_packages
 * @property int $status
 * @property int $direction_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Package $package
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Direction $direction
 * @property \App\Model\Entity\Payment[] $payments
 */
class PackageOrder extends Entity
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
        'package_id' => true,
        'user_id' => true,
        'delivery' => true,
        'price_delivery' => true,
        'total_packages' => true,
        'status' => true,
        'direction_id' => true,
        'created' => true,
        'modified' => true,
        'package' => true,
        'user' => true,
        'direction' => true,
        'payments' => true
    ];
}
