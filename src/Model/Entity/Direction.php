<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direction Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $state
 * @property string $city
 * @property string $subdivision
 * @property int $zip
 * @property string $street
 * @property string $deparment
 * @property int $apartment_floor
 * @property string $door
 * @property int $arrival_option
 * @property float $latitude
 * @property float $longitude
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order[] $orders
 */
class Direction extends Entity
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
        'state' => true,
        'city' => true,
        'subdivision' => true,
        'zip' => true,
        'street' => true,
        'deparment' => true,
        'apartment_floor' => true,
        'door' => true,
        'arrival_option' => true,
        'latitude' => true,
        'longitude' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'orders' => true
    ];
}
