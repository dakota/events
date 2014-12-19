<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventsUsers Model
 */
class EventsUsersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('events_users');
		$this->displayField('id');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');
		$this->belongsTo('Users', [
			'alias' => 'Users',
			'foreignKey' => 'user_id'
		]);
		$this->belongsTo('Events', [
			'alias' => 'Events',
			'foreignKey' => 'event_id'
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator instance
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->add('user_id', 'valid', ['rule' => 'numeric'])
			->requirePresence('user_id', 'create')
			->notEmpty('user_id')
			->add('event_id', 'valid', ['rule' => 'numeric'])
			->requirePresence('event_id', 'create')
			->notEmpty('event_id');

		return $validator;
	}

}
