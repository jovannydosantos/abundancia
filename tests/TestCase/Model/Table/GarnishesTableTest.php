<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GarnishesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GarnishesTable Test Case
 */
class GarnishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GarnishesTable
     */
    public $Garnishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.garnishes',
        'app.extra_garnishes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Garnishes') ? [] : ['className' => GarnishesTable::class];
        $this->Garnishes = TableRegistry::getTableLocator()->get('Garnishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Garnishes);

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
