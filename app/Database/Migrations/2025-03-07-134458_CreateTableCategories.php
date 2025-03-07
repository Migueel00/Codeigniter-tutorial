<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableCategories extends Migration
{
    public function up()
    {
        // Create table with this fields
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');
    }

    public function down()
    {
        // Drop table 
        $this->forge->dropTable('categories');
    }
}
