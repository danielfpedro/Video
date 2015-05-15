<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtistsVideo Entity.
 */
class ArtistsVideo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'video' => true,
        'artist' => true,
    ];
}
