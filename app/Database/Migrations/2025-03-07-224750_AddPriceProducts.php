<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPriceProducts extends Migration
{
    public function up()
    {
        //
        $columns = [
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'after' => 'name',
                'null' => false // when editing a table has to expecify nullable or not
            ]
        ];

        // php spark migrate
        $this->forge->addColumn('products', $columns);
    }

    public function down()
    {
        // php spark migrate:rollback -b 1
        $this->forge->dropColumn('products', 'price');
    }
}
