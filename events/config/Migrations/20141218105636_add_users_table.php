<?php

use Phinx\Migration\AbstractMigration;

class AddUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     */
    public function change()
    {
        $usersTable = $this->table('users');
        $usersTable
            ->addColumn('name', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $eventsUsersTable = $this->table('events_users');
        $eventsUsersTable
            ->addColumn('user_id', 'integer')
            ->addColumn('event_id', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();            
    }
}