<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventsUser Entity.
 */
class EventsUser extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'user_id' => true,
		'event_id' => true,
		'user' => true,
		'event' => true,
	];

}
