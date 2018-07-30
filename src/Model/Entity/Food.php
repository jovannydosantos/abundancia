<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity
 *
 * @property int $id
 * @property string $food
 * @property float $price
 * @property string $description
 * @property int $status
 * @property int $food_type_id
 * @property \Cake\I18n\FrozenDate $sale_date
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\FoodType $food_type
 * @property \App\Model\Entity\FoodGarnish[] $food_garnishes
 * @property \App\Model\Entity\FoodOrder[] $food_orders
 */
class Food extends Entity
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
        'food' => true,
        'price' => true,
        'description' => true,
        'status' => true,
        'food_type_id' => true,
        'sale_date' => true,
        'created' => true,
        'modified' => true,
        'food_type' => true,
        'food_garnishes' => true,
        'food_orders' => true
    ];
}
