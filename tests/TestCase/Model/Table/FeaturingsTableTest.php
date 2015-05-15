<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeaturingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeaturingsTable Test Case
 */
class FeaturingsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.featurings',
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
        $config = TableRegistry::exists('Featurings') ? [] : ['className' => 'App\Model\Table\FeaturingsTable'];
        $this->Featurings = TableRegistry::get('Featurings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Featurings);

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
