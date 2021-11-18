<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceMig extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'servicename'         => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('service');
    }

    public function down()
    {
        $this->forge->dropTable('service');
    }
}
