<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Playlist Entity.
 */
class Playlist extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'is_active' => true,
        'random' => true,
        'user' => true,
    ];
}
