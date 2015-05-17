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
        'videos' => true,
        'tags' => true,
        'profile_url' => true
    ];

    protected function _getProfileUrl()
    {
        return ['controller' => 'Site', 'action' => 'artistProfile', $this->_properties['slug']];
    }
}
