<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChangeGarnishesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChangeGarnishesTable Test Case
 */
class ChangeGarnishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChangeGarnishesTable
     */
    public $ChangeGarnishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.change_garnishes',
        'app.food_orders',
        'app.actual_garnishes',
        'app.new_garnishes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ChangeGarnishes') ? [] : ['className' => ChangeGarnishesTable::class];
        $this->ChangeGarnishes = TableRegistry::getTableLocator()->get('ChangeGarnishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChangeGarnishes);

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
