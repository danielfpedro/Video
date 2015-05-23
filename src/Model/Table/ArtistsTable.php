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
    protected function _initializeSchema(\Cake\Database\Schema\Table $table)
    {
        $table->columnType('cover_image', 'proffer.file');
        $table->columnType('profile_image', 'proffer.file');
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
        $this->table('artists');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable', ['field' => 'name']);
        $this->hasMany('Videos', [
            'foreignKey' => 'artist_id'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'artist_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'artists_tags'
        ]);
        $this->belongsToMany('Featurings', [
            'className' => 'Videos',
            'foreignKey' => 'artist_id',
            'targetForeignKey' => 'video_id',
            'joinTable' => 'artists_videos'
        ]);
        // Add the behaviour and configure any options you want
        $this->addBehavior('Proffer.Proffer', [
            'profile_image' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'md' => ['w' => 300, 'h' => 400, 'crop' => true],
                    'sq_lg' => ['w' => 200, 'h' => 200, 'crop' => true],
                    'sq' => ['w' => 100, 'h' => 100, 'crop' => true],
                ],
                'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
            ],
            'cover_image' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'regular' => ['w' => 1200, 'h' => 700, 'crop' => true],
                    'sm' => ['w' => 600, 'h' => 350, 'crop' => true],
                ],
                'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
            ]
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
            ->allowEmpty('profile_image');
            
        $validator
            ->requirePresence('cover_image', 'create')
            ->allowEmpty('cover_image');
            
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
