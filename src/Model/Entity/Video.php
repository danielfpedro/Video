<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Router;
use Cake\Collection\Collection;

/**
 * Video Entity.
 */
class Video extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'embed' => true,
        'slug' => true,
        'is_active' => true,
        'descricao' => true,
        'views' => true,
        'destaque' => true,
        'destaque_ordem' => true,
        'tags_search' => true,
        'artist_id' => true,
        'artists' => true,
        'starreds' => true,
        'playlists' => true,
        'tags' => true,
        'featurings_formated' => true,
        'player_url' => true,
        'featurings' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_lg' => true,
        'photo_md' => true,
        'photo_sq' => true
    ];

    protected function _getPhotoLg()
    {
        return $this->_getImageFullPathImage('lg');
    }
    protected function _getPhotoMd()
    {
        return $this->_getImageFullPathImage('md');
    }
    protected function _getPhotoSq()
    {
        return $this->_getImageFullPathImage('sq');
    }

    public function _getImageFullPathImage($prefix)
    {
        return '../files/videos/photo/' .$this->_properties['photo_dir']. '/' .$prefix. '_' . $this->_properties['photo'];
    }

    protected function _getPlayerUrl()
    {
        return ['controller' => 'Site', 'action' => 'player', $this->_properties['slug']];
    }

    protected function _getFeaturingsFormated()
    {
        $out = null;
        if ($this->_properties['featurings']) {
            $collection = new Collection($this->_properties['featurings']);

            $out = $collection->map(function($value, $key){
                return '<a href="'.Router::url(['controller' => 'Site', 'action' => 'artistProfile', $value->slug]).'">'.$value->name.'</a>';
            })->toArray();
        }
        return $out;
    }
}
