<?php
namespace App\Model\Table;

use App\Model\Entity\ArtistsVideo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArtistsVideos Model
 */
class ArtistsVideosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('artists_videos');
        $this->displayField('video_id');
        $this->primaryKey(['video_id', 'artist_id']);
        $this->belongsTo('Videos', [
            'foreignKey' => 'video_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Artists', [
            'foreignKey' => 'artist_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['video_id'], 'Videos'));
        $rules->add($rules->existsIn(['artist_id'], 'Artists'));
        return $rules;
    }
}
