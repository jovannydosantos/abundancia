<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrinksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrinksTable Test Case
 */
class DrinksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DrinksTable
     */
    public $Drinks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.drinks',
        'app.drink_orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Drinks') ? [] : ['className' => DrinksTable::class];
        $this->Drinks = TableRegistry::getTableLocator()->get('Drinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Drinks);

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
}
