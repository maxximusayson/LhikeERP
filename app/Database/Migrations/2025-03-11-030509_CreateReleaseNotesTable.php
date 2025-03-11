<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReleaseNotesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'releasenote_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'releasenote_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'note_release_date' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'link' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('releasenote_id', true);
        $this->forge->createTable('releasenotes'); // Ensure correct table name
    }

    public function down()
    {
        $this->forge->dropTable('releasenotes'); // Ensure correct table name
    }
}
