<?php
namespace App\Model\Table;

use App\Model\Entity\Artist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artists Model
 */
class ArtistsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('artists');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Tags', [
            'foreignKey' => 'artist_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'artists_tags'
        ]);
        $this->belongsToMany('Videos', [
            'foreignKey' => 'artist_id',
            'targetForeignKey' => 'video_id',
            'joinTable' => 'artists_videos'
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
            ->requirePresence('profile_image', 'create')
            ->notEmpty('profile_image');
            
        $validator
            ->requirePresence('cover_image', 'create')
            ->notEmpty('cover_image');
            
        $validator
            ->requirePresence('folder_image', 'create')
            ->notEmpty('folder_image');
            
        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');
            
        $validator
            ->add('is_active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');
            
        $validator
            ->allowEmpty('website');
            
        $validator
            ->allowEmpty('facebook_page');
            
        $validator
            ->allowEmpty('twitter_profile');

        return $validator;
    }
}
