<?php


use Phinx\Migration\AbstractMigration;

class CreateParticipantsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('participants');
        $table->addColumn('name', 'string')
              ->addColumn('email', 'string')
              ->addColumn('phone', 'string')
              ->addColumn('company', 'string')
              ->addColumn('event_id', 'integer')
              ->addForeignKey('event_id', 'events', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->create();
    }
}
