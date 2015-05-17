<?php
namespace App\Model\Table;

use App\Model\Entity\Video;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Videos Model
 */
class VideosTable extends Table
{

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
            
        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');
            
        $validator
            ->requirePresence('image_folder', 'create')
            ->notEmpty('image_folder');
            
        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');
            
        $validator
            ->requirePresence('tags_string', 'create')
            ->notEmpty('tags_string');
            
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
            
        $validator
            ->allowEmpty('tag_search');

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
