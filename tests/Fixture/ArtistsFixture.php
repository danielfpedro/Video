<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtistsFixture
 *
 */
class ArtistsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'profile_image' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cover_image' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'folder_image' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'slug' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_active' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'website' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'facebook_page' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'twitter_profile' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'profile_image' => 'Lorem ipsum dolor sit amet',
            'cover_image' => 'Lorem ipsum dolor sit amet',
            'folder_image' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'is_active' => 1,
            'created' => '2015-05-14 03:37:17',
            'modified' => '2015-05-14 03:37:17',
            'website' => 'Lorem ipsum dolor sit amet',
            'facebook_page' => 'Lorem ipsu',
            'twitter_profile' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
