<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistsTagsFixture
 *
 */
class ArtistsTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'artistas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tags_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_artistas_has_tags_tags1_idx' => ['type' => 'index', 'columns' => ['tags_id'], 'length' => []],
            'fk_artistas_has_tags_artistas1_idx' => ['type' => 'index', 'columns' => ['artistas_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['artistas_id', 'tags_id'], 'length' => []],
            'fk_artistas_has_tags_artistas1' => ['type' => 'foreign', 'columns' => ['artistas_id'], 'references' => ['artists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_artistas_has_tags_tags1' => ['type' => 'foreign', 'columns' => ['tags_id'], 'references' => ['tags', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'artistas_id' => 1,
            'tags_id' => 1
        ],
    ];
}
