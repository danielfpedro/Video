<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VideosPlaylistsFixture
 *
 */
class VideosPlaylistsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'videos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'playlists_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_videos_has_playlists_playlists1_idx' => ['type' => 'index', 'columns' => ['playlists_id'], 'length' => []],
            'fk_videos_has_playlists_videos1_idx' => ['type' => 'index', 'columns' => ['videos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['videos_id', 'playlists_id'], 'length' => []],
            'fk_videos_has_playlists_playlists1' => ['type' => 'foreign', 'columns' => ['playlists_id'], 'references' => ['playlists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_videos_has_playlists_videos1' => ['type' => 'foreign', 'columns' => ['videos_id'], 'references' => ['videos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'videos_id' => 1,
            'playlists_id' => 1
        ],
    ];
}
