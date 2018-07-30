<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuppliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuppliesTable Test Case
 */
class SuppliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SuppliesTable
     */
    public $Supplies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supplies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Supplies') ? [] : ['className' => SuppliesTable::class];
        $this->Supplies = TableRegistry::getTableLocator()->get('Supplies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Supplies);

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
