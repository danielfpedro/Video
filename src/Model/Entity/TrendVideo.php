<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrendVideo Entity.
 */
class TrendVideo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'video_id' => true,
        'video' => true,
    ];
}
