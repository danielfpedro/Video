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
        'photo_dir' => true,
        'slug' => true,
        'is_active' => true,
        'website' => true,
        'facebook_page' => true,
        'twitter_profile' => true,
        'videos' => true,
        'tags' => true,
        'profile_url' => true,
        'profile_image_lg' => true,
        'profile_image_md' => true,
        'profile_image_sq' => true,
        'facebook_page_href' => true,
        'twitter_profile_href' => true

    ];

    public function _getFacebookPageHref()
    {
        return 'https://www.facebook.com/' . $this->_properties['facebook_page'];
    }
    public function _getTwitterProfileHref()
    {
        return 'https://twitter.com/' . $this->_properties['twitter_profile'];
    }

    protected function _getProfileImageLg()
    {
        return $this->_getImageFullPath('lg', 'profile_image');
    }
    protected function _getProfileImageMd()
    {
        return $this->_getImageFullPath('mg', 'profile_image');
    }
    protected function _getProfileImageSq()
    {
        return $this->_getImageFullPath('sq', 'profile_image');
    }

    public function _getImageFullPath($prefix, $field)
    {
        return '../files/artists/' .$field. '/' .$this->_properties['photo_dir']. '/' .$prefix. '_' . $this->_properties[$field];
    }

    protected function _getProfileUrl()
    {
        $out = [];
        if ($this->_properties['slug']) {
            $out = ['controller' => 'Site', 'action' => 'artistProfile', $this->_properties['slug']];
        }
        return $out;
    }
}
