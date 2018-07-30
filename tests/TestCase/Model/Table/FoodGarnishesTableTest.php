<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FoodGarnishesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FoodGarnishesTable Test Case
 */
class FoodGarnishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FoodGarnishesTable
     */
    public $FoodGarnishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.food_garnishes',
        'app.foods',
        'app.garnishes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FoodGarnishes') ? [] : ['className' => FoodGarnishesTable::class];
        $this->FoodGarnishes = TableRegistry::getTableLocator()->get('FoodGarnishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FoodGarnishes);

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
