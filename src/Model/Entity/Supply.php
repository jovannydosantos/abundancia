<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supply Entity
 *
 * @property int $id
 * @property string $input
 * @property float $price
 * @property float $total
 * @property string $measurement
 * @property \Cake\I18n\FrozenDate $date_input
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 */
class Supply extends Entity
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
        'id' => true,
        'input' => true,
        'price' => true,
        'total' => true,
        'measurement' => true,
        'date_input' => true,
        'created' => true,
        'modified' => true
    ];
}
