<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VideosTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VideosTagsTable Test Case
 */
class VideosTagsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.videos_tags',
        'app.videos',
        'app.starreds',
        'app.users',
        'app.playlists',
        'app.artists',
        'app.tags',
        'app.artists_tags',
        'app.artists_videos',
        'app.videos_playlists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VideosTags') ? [] : ['className' => 'App\Model\Table\VideosTagsTable'];
        $this->VideosTags = TableRegistry::get('VideosTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VideosTags);

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
