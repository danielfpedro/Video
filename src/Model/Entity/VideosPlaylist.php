<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VideosPlaylist Entity.
 */
class VideosPlaylist extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'video' => true,
        'playlist' => true,
    ];
}
