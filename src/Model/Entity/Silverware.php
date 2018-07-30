<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Silverware Entity
 *
 * @property int $id
 * @property int $food_order_id
 * @property int $silverware_type
 * @property int $total_silverware
 * @property float $price
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\FoodOrder $food_order
 */
class Silverware extends Entity
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
        'silverware_type' => true,
        'total_silverware' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'food_order' => true
    ];
}
