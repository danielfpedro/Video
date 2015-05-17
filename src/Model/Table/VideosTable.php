<?php
namespace App\Model\Table;

use App\Model\Entity\Video;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Entity;
use Cake\Event\Event;

/**
 * Videos Model
 */
class VideosTable extends Table
{
    protected function _initializeSchema(\Cake\Database\Schema\Table $table)
    {
        $table->columnType('photo', 'proffer.file');
        return $table;
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('videos');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable', ['field' => 'name']);

        $this->belongsTo('Artists', [
            'foreignKey' => 'artist_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Starreds', [
            'foreignKey' => 'video_id'
        ]);
        $this->belongsToMany('Featurings', [
            'className' => 'Artists',
            'foreignKey' => 'video_id',
            'targetForeignKey' => 'artist_id',
            'joinTable' => 'artists_videos'
        ]);
        $this->belongsToMany('Playlists', [
            'foreignKey' => 'video_id',
            'targetForeignKey' => 'playlist_id',
            'joinTable' => 'videos_playlists'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'video_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'videos_tags'
        ]);

        // Add the behaviour and configure any options you want
        $this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'lg' => ['w' => 700, 'h' => 430, 'crop' => true],
                    'md' => ['w' => 350, 'h' => 215, 'crop' => true],
                    'sq' => ['w' => 140, 'h' => 140, 'crop' => true],
                ],
                'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
            ]
        ]);
    }

    public function beforeSave(Event $event, Entity $entity)
    {
        $entity->tags_search = $this->_buildTagsSeach($entity);
    }

    protected function _buildTagsSeach($entity)
    {
        $artist = $this->Artists->get($entity->artist_id);
        $out = [];
        $out[] = $entity->name;
        $out[] = $artist->name;
        if ($entity->featurings) {
            foreach ($entity->featurings as $featuring) {
                $out[] = $featuring->name;
            }
        }
        return implode($out, ',');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('embed', 'create')
            ->notEmpty('embed');
            
        // $validator
        //     ->requirePresence('slug', 'create')
        //     ->notEmpty('slug');
            
        $validator
            ->add('is_active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');
            
        $validator
            ->allowEmpty('descricao');
            
        $validator
            ->add('views', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('views');
            
        $validator
            ->add('destaque', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('destaque');
            
        $validator
            ->add('destaque_ordem', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('destaque_ordem');
            
        // $validator
        //     ->allowEmpty('tag_search');
        $validator->provider('proffer', 'Proffer\Model\Validation\ProfferRules');
        // $validator
        //     ->add('photo', 'file', [
        //         'rule' => ['mimeType', ['image/jpeg', 'image/png']]
        //     ]);
        $validator
            ->requirePresence('photo', 'create')
            ->allowEmpty('photo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['artist_id'], 'Artists'));
        return $rules;
    }
}
