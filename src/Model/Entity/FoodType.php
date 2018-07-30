<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FoodType Entity
 *
 * @property int $id
 * @property string $food_type
 *
 * @property \App\Model\Entity\Food[] $foods
 */
class FoodType extends Entity
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
        'food_type' => true,
        'foods' => true
    ];
}
