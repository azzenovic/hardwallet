<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Constructor Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $website
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $chief_phone
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Material[] $materials
 */
class Constructor extends Entity
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
        '*' => true,
        'id' => false
    ];
}
