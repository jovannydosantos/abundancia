<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FoodOrder Entity
 *
 * @property int $id
 * @property int $food_id
 * @property int $order_id
 * @property int $silverware_id
 * @property string $special_requirements
 * @property float $price_special_requirements
 * @property \Cake\I18n\FrozenDate $created
 * @property int $modified
 *
 * @property \App\Model\Entity\Food $food
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\ChangeGarnish[] $change_garnishes
 * @property \App\Model\Entity\Silverware[] $silverwares
 * @property \App\Model\Entity\Tupper[] $tuppers
 */
class FoodOrder extends Entity
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
        'food_id' => true,
        'order_id' => true,
        'silverware_id' => true,
        'special_requirements' => true,
        'price_special_requirements' => true,
        'created' => true,
        'modified' => true,
        'food' => true,
        'order' => true,
        'change_garnishes' => true,
        'silverwares' => true,
        'tuppers' => true
    ];
}
