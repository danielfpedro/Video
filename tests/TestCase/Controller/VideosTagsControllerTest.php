<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VideosTagsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VideosTagsController Test Case
 */
class VideosTagsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.videos_tags',
        'app.videos',
        'app.artists',
        'app.artists_videos',
        'app.tags',
        'app.artists_tags',
        'app.starreds',
        'app.users',
        'app.playlists',
        'app.videos_playlists'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
