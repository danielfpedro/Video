<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrendVideosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrendVideosTable Test Case
 */
class TrendVideosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trend_videos',
        'app.videos',
        'app.artists',
        'app.artists_videos',
        'app.tags',
        'app.artists_tags',
        'app.videos_tags',
        'app.starreds',
        'app.users',
        'app.playlists',
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
        $config = TableRegistry::exists('TrendVideos') ? [] : ['className' => 'App\Model\Table\TrendVideosTable'];
        $this->TrendVideos = TableRegistry::get('TrendVideos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrendVideos);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
