<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

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
        'image' => true,
        'image_folder' => true,
        'slug' => true,
        'tags_string' => true,
        'is_active' => true,
        'descricao' => true,
        'views' => true,
        'destaque' => true,
        'destaque_ordem' => true,
        'tag_search' => true,
        'artist_id' => true,
        'artists' => true,
        'starreds' => true,
        'playlists' => true,
        'tags' => true,
        'player_url' => true
        // 'artists' => true
    ];

    protected function _getPlayerUrl()
    {
        return ['action' => 'player', $this->_properties['slug']];
    }
}
