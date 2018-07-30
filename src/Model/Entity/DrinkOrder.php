<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DrinkOrder Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $drink_id
 * @property int $total
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Drink $drink
 */
class DrinkOrder extends Entity
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
        'order_id' => true,
        'drink_id' => true,
        'total' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
        'drink' => true
    ];
}
