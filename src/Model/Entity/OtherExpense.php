<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OtherExpense Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $expenses_description
 * @property float $total
 * @property \Cake\I18n\FrozenDate $date_expense
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 */
class OtherExpense extends Entity
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
        'expenses_description' => true,
        'total' => true,
        'date_expense' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
