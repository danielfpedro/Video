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
        'starreds' => true,
        'artists' => true,
        'playlists' => true,
        'tags' => true,
        'image_full_path' => true
    ];

    protected function _getImageFullPath() {
        return 'videos/' . $this->_properties['image_folder'] . '/' . $this->_properties['image'];
    }
}
