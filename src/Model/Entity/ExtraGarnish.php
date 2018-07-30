<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtraGarnish Entity
 *
 * @property int $id
 * @property int $garnish_id
 * @property int $order_id
 * @property int $total
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Garnish $garnish
 * @property \App\Model\Entity\Order $order
 */
class ExtraGarnish extends Entity
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
        'garnish_id' => true,
        'order_id' => true,
        'total' => true,
        'created' => true,
        'modified' => true,
        'garnish' => true,
        'order' => true
    ];
}
