<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tupper Entity
 *
 * @property int $id
 * @property int $food_order_id
 * @property int $delivery_status
 * @property int $return_status
 * @property int $tupper_charge
 * @property float $price
 * @property int $created
 * @property int $modified
 *
 * @property \App\Model\Entity\FoodOrder $food_order
 */
class Tupper extends Entity
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
        'food_order_id' => true,
        'delivery_status' => true,
        'return_status' => true,
        'tupper_charge' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'food_order' => true
    ];
}
