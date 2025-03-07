<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Trainers',
            ],
            [
                'name' => 'Sports'
            ],
            [
                'name' => 'Electronic'
            ]
        ];
        $this->db->table('categories')->insertBatch($data);
    }
}
