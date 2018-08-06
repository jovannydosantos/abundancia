<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Drink Entity
 *
 * @property int $id
 * @property string $drink
 * @property string $size
 * @property float $price
 * @property int $status
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\DrinkOrder[] $drink_orders
 */
class Drink extends Entity
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
        'drink' => true,
        'size' => true,
        'price' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'drink_orders' => true
    ];
}
