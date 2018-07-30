<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrinkOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrinkOrdersTable Test Case
 */
class DrinkOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DrinkOrdersTable
     */
    public $DrinkOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.drink_orders',
        'app.orders',
        'app.drinks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DrinkOrders') ? [] : ['className' => DrinkOrdersTable::class];
        $this->DrinkOrders = TableRegistry::getTableLocator()->get('DrinkOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DrinkOrders);

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
