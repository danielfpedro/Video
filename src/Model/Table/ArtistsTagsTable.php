<?php
namespace App\Model\Table;

use App\Model\Entity\ArtistsTag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArtistsTags Model
 */
class ArtistsTagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('artists_tags');
        $this->displayField('artistas_id');
        $this->primaryKey(['artistas_id', 'tags_id']);
        $this->belongsTo('Artists', [
            'foreignKey' => 'artistas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tags_id',
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
        $rules->add($rules->existsIn(['artistas_id'], 'Artists'));
        $rules->add($rules->existsIn(['tags_id'], 'Tags'));
        return $rules;
    }
}
