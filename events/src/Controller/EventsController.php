<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController {

    use \Crud\Controller\ControllerTrait;

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete',
            ],
        ],
    ];

    public function add() {
        $this->set('users', $this->Events->Users->find('list'));

        return $this->Crud->execute();
    }

    public function edit($id) {
        $this->Crud->on('beforeFind', function (\Cake\Event\Event $event) {
            $event->subject->query->contain(['Users']);
        });

        $this->set('users', $this->Events->Users->find('list'));

        return $this->Crud->execute();
    }

    public function view($id) {
        $this->Crud->on('beforeFind', function (\Cake\Event\Event $event) {
            $event->subject->query->contain(['Users']);
        });

        return $this->Crud->execute();
    }    
}
