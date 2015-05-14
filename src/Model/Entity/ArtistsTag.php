<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtistsTag Entity.
 */
class ArtistsTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'artist' => true,
        'tag' => true,
    ];
}
