<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FoodGarnish Entity
 *
 * @property int $id
 * @property int $food_id
 * @property int $garnishes_id
 * @property \Cake\I18n\FrozenDate $created
 * @property int $modified
 *
 * @property \App\Model\Entity\Food $food
 * @property \App\Model\Entity\Garnish $garnish
 */
class FoodGarnish extends Entity
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
        'garnishes_id' => true,
        'created' => true,
        'modified' => true,
        'food' => true,
        'garnish' => true
    ];
}
