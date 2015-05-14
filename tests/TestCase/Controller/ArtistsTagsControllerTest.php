<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ArtistsTagsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ArtistsTagsController Test Case
 */
class ArtistsTagsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artists_tags',
        'app.artists',
        'app.tags',
        'app.videos',
        'app.starreds',
        'app.users',
        'app.playlists',
        'app.artists_videos',
        'app.videos_playlists',
        'app.videos_tags'
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
