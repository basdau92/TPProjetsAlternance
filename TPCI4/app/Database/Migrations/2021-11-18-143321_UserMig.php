<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMig extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'      => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'lastname'   => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'firstname'   => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'birthdate'   => [
                'type' => 'DATE',
            ],
            'address'   => [
                'type' => 'TEXT',
            ],
            'zip_code'   => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'phone'   => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'service'   => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('service', 'service', 'id');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
