<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity.
 */
class Event extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'start' => true,
        'end' => true,
        'all_day' => true,
        'users' => true
    ];

}
