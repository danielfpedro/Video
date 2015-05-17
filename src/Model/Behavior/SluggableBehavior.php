<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Utility\Inflector;
use Cake\ORM\Entity;
use Cake\Event\Event;

/**
 * Sluggable behavior
 */
class SluggableBehavior extends Behavior
{

	protected $_defaultConfig = [
        'field' => 'title',
        'slug' => 'slug',
        'replacement' => '-',
    ];

    public function slug(Entity $entity)
    {
        $config = $this->config();
        $value = $entity->get($config['field']);
        $entity->set($config['slug'], strtolower(Inflector::slug($value, $config['replacement'])));
    }

    public function beforeSave(Event $event, Entity $entity)
    {
        $this->slug($entity);
    }
}
