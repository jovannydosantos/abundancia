<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChangeGarnish Entity
 *
 * @property int $id
 * @property int $food_order_id
 * @property int $actual_garnish_id
 * @property int $new_garnish_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\FoodOrder $food_order
 * @property \App\Model\Entity\ActualGarnish $actual_garnish
 * @property \App\Model\Entity\NewGarnish $new_garnish
 */
class ChangeGarnish extends Entity
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
        'actual_garnish_id' => true,
        'new_garnish_id' => true,
        'created' => true,
        'modified' => true,
        'food_order' => true,
        'actual_garnish' => true,
        'new_garnish' => true
    ];
}
