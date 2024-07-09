<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'image'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'location'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'desc'        => [
                'type'           => 'TEXT',
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
