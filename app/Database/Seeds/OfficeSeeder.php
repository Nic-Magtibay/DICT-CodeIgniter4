<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OfficeSeeder extends Seeder
{
    public function run()
    {
        //
        $data =[
            [
            'code'=> 'DOLE',
             'name' => 'Department of Labor and Employment',
             'email' => 'dole@gmail.com',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
            ],

             [
             'code'=> 'DOJ',
             'name' => 'Department of Justice',
             'email' => 'doj@gmail.com',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
             ]
        ];

        $this->db->table('offices')->insertBatch($data);
    }
}
