<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artist Entity.
 */
class Artist extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'profile_image' => true,
        'cover_image' => true,
        'folder_image' => true,
        'slug' => true,
        'is_active' => true,
        'website' => true,
        'facebook_page' => true,
        'twitter_profile' => true,
        'tags' => true,
        'videos' => true,
    ];
}
