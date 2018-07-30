<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SilverwaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SilverwaresTable Test Case
 */
class SilverwaresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SilverwaresTable
     */
    public $Silverwares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.silverwares',
        'app.food_orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Silverwares') ? [] : ['className' => SilverwaresTable::class];
        $this->Silverwares = TableRegistry::getTableLocator()->get('Silverwares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Silverwares);

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
