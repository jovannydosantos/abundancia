<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Garnish Entity
 *
 * @property int $id
 * @property string $garnish
 * @property int $status
 * @property float $price
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\ExtraGarnish[] $extra_garnishes
 */
class Garnish extends Entity
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
        'garnish' => true,
        'status' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'extra_garnishes' => true
    ];
}
