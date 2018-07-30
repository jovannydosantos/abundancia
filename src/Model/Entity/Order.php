<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $direction_id
 * @property int $delivery
 * @property float $price_delivery
 * @property int $total_vegan_food
 * @property int $total_normal_food
 * @property int $status
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Direction $direction
 * @property \App\Model\Entity\Delivery[] $deliveries
 * @property \App\Model\Entity\DrinkOrder[] $drink_orders
 * @property \App\Model\Entity\ExtraGarnish[] $extra_garnishes
 * @property \App\Model\Entity\FoodOrder[] $food_orders
 * @property \App\Model\Entity\Payment[] $payments
 */
class Order extends Entity
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
        'user_id' => true,
        'direction_id' => true,
        'delivery' => true,
        'price_delivery' => true,
        'total_vegan_food' => true,
        'total_normal_food' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'direction' => true,
        'deliveries' => true,
        'drink_orders' => true,
        'extra_garnishes' => true,
        'food_orders' => true,
        'payments' => true
    ];
}
