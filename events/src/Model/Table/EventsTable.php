<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 */
class EventsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
    public function initialize(array $config) {
        $this->table('events');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Users', [
            'alias' => 'Users',
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'events_users'
        ]);     
    }

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
    public function validationDefault(Validator $validator) {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->requirePresence('description', 'create')
            ->notEmpty('description')
            ->add('start', 'valid', ['rule' => 'datetime'])
            ->requirePresence('start', 'create')
            ->notEmpty('start')
            ->add('end', 'valid', ['rule' => 'datetime'])
            ->requirePresence('end', 'create')
            ->notEmpty('end')
            ->add('all_day', 'valid', ['rule' => 'boolean'])
            ->requirePresence('all_day', 'create')
            ->notEmpty('all_day');

        return $validator;
    }

}
