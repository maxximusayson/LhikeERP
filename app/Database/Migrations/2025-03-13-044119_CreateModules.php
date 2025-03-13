<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'module_id'     => ['type' => 'INT', 'auto_increment' => true],
            'modulename'    => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'description'   => ['type' => 'TEXT', 'null' => true],
            'release_date'  => ['type' => 'DATE', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('module_id');
        $this->forge->createTable('modules');

        $this->forge->addField([
            'selected_id'    => ['type' => 'INT', 'auto_increment' => true],
            'module_id'      => ['type' => 'INT', 'null' => false],
            'version_name'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'description'    => ['type' => 'TEXT', 'null' => false],
            'release_date'   => ['type' => 'DATE', 'null' => false],
            'link'           => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
        ]);
        $this->forge->addPrimaryKey('selected_id');
        $this->forge->addForeignKey('module_id', 'modules', 'module_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('selectedmodules');
    }

    public function down()
    {
        $this->forge->dropTable('selectedmodules');
        $this->forge->dropTable('modules');
    }
}