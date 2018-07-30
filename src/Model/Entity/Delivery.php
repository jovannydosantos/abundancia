<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Delivery Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $order_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order $order
 */
class Delivery extends Entity
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
        'user_id' => true,
        'order_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'order' => true
    ];
}