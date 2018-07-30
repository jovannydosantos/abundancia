<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FoodOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FoodOrdersTable Test Case
 */
class FoodOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FoodOrdersTable
     */
    public $FoodOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.food_orders',
        'app.foods',
        'app.orders',
        'app.change_garnishes',
        'app.silverwares',
        'app.tuppers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FoodOrders') ? [] : ['className' => FoodOrdersTable::class];
        $this->FoodOrders = TableRegistry::getTableLocator()->get('FoodOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FoodOrders);

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
