<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SilverwareTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SilverwareTable Test Case
 */
class SilverwareTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SilverwareTable
     */
    public $Silverware;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.silverware',
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
        $config = TableRegistry::getTableLocator()->exists('Silverware') ? [] : ['className' => SilverwareTable::class];
        $this->Silverware = TableRegistry::getTableLocator()->get('Silverware', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Silverware);

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
