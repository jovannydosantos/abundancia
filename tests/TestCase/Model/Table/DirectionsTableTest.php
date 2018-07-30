<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DirectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DirectionsTable Test Case
 */
class DirectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DirectionsTable
     */
    public $Directions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.directions',
        'app.users',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Directions') ? [] : ['className' => DirectionsTable::class];
        $this->Directions = TableRegistry::getTableLocator()->get('Directions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Directions);

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
