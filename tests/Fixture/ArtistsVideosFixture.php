<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistsVideosFixture
 *
 */
class ArtistsVideosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'video_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'artist_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'participacao' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_videos_artistas_artistas1_idx' => ['type' => 'index', 'columns' => ['artist_id'], 'length' => []],
            'fk_videos_artistas_videos1_idx' => ['type' => 'index', 'columns' => ['video_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_videos_artistas_artistas1' => ['type' => 'foreign', 'columns' => ['artist_id'], 'references' => ['artists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_videos_artistas_videos1' => ['type' => 'foreign', 'columns' => ['video_id'], 'references' => ['videos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'video_id' => 1,
            'artist_id' => 1,
            'participacao' => 1
        ],
    ];
}
