<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvestmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvestmentsTable Test Case
 */
class InvestmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvestmentsTable
     */
    public $Investments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.investments',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Investments') ? [] : ['className' => InvestmentsTable::class];
        $this->Investments = TableRegistry::getTableLocator()->get('Investments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Investments);

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
