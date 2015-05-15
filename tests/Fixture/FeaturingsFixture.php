<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FeaturingsFixture
 *
 */
class FeaturingsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'video_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'artist_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_videos_has_artists_artists1_idx' => ['type' => 'index', 'columns' => ['artist_id'], 'length' => []],
            'fk_videos_has_artists_videos1_idx' => ['type' => 'index', 'columns' => ['video_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['video_id', 'artist_id'], 'length' => []],
            'fk_videos_has_artists_artists1' => ['type' => 'foreign', 'columns' => ['artist_id'], 'references' => ['artists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_videos_has_artists_videos1' => ['type' => 'foreign', 'columns' => ['video_id'], 'references' => ['videos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'video_id' => 1,
            'artist_id' => 1
        ],
    ];
}
