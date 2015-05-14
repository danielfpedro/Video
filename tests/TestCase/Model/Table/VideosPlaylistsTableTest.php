<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VideosPlaylistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VideosPlaylistsTable Test Case
 */
class VideosPlaylistsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.videos_playlists',
        'app.videos',
        'app.starreds',
        'app.users',
        'app.playlists',
        'app.artists',
        'app.tags',
        'app.artists_tags',
        'app.videos_tags',
        'app.artists_videos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VideosPlaylists') ? [] : ['className' => 'App\Model\Table\VideosPlaylistsTable'];
        $this->VideosPlaylists = TableRegistry::get('VideosPlaylists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VideosPlaylists);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
