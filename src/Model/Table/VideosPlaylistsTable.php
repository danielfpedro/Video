<?php
namespace App\Model\Table;

use App\Model\Entity\VideosPlaylist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VideosPlaylists Model
 */
class VideosPlaylistsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('videos_playlists');
        $this->displayField('videos_id');
        $this->primaryKey(['videos_id', 'playlists_id']);
        $this->belongsTo('Videos', [
            'foreignKey' => 'videos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Playlists', [
            'foreignKey' => 'playlists_id',
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
        $rules->add($rules->existsIn(['videos_id'], 'Videos'));
        $rules->add($rules->existsIn(['playlists_id'], 'Playlists'));
        return $rules;
    }
}
