<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VideosTag Entity.
 */
class VideosTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'video' => true,
        'tag' => true,
    ];
}
