<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsUsersTable Test Case
 */
class EventsUsersTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'EventsUsers' => 'app.events_users',
		'Users' => 'app.users',
		'Events' => 'app.events'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('EventsUsers') ? [] : ['className' => 'App\Model\Table\EventsUsersTable'];
		$this->EventsUsers = TableRegistry::get('EventsUsers', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsUsers);

		parent::tearDown();
	}

/**
 * Test initialize method
 *
 * @return void
 */
	public function testInitialize() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test validationDefault method
 *
 * @return void
 */
	public function testValidationDefault() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
