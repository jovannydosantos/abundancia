<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtraGarnishesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtraGarnishesTable Test Case
 */
class ExtraGarnishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtraGarnishesTable
     */
    public $ExtraGarnishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.extra_garnishes',
        'app.garnishes',
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
        $config = TableRegistry::getTableLocator()->exists('ExtraGarnishes') ? [] : ['className' => ExtraGarnishesTable::class];
        $this->ExtraGarnishes = TableRegistry::getTableLocator()->get('ExtraGarnishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtraGarnishes);

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
