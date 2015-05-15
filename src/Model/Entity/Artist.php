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
        'facebook_page_href' => true,
        'twitter_profile_href' => true,
        'profile_url' => true
        // 'videos' => true
    ];

    protected function _getFacebookPageHref()
    {
        if ($this->_properties['facebook_page']) {
            return 'https://facebook.com/' . $this->_properties['facebook_page'];
        }
        return null;
    }
    protected function _getTwitterProfileHref()
    {
        if ($this->_properties['twitter_profile']) {
            return 'https://twitter.com/' . $this->_properties['twitter_profile'];
        }
        return null;
    }
    protected function _getProfileUrl()
    {
        return ['action' => 'artistProfile', $this->_properties['slug']];
    }
}
