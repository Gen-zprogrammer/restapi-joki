<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        //lakukan perulangan data
        for ($i = 0; $i < 10; $i++) {
        $data = [
        [
            'username' => 'Frisda Puspa Salsabilla',
            'password' => '22SA11A006',
            'firstname' => 'Frisda',
            'lastname' => 'Salsabila',
            'address' => 'Purwokerto, Banyumas',
            'age' => '18',
            'created_date' => Time::now(),
            'updated_date' => Time::now()
        ],
        [
            'username' => 'Azizi Asadhel',
            'password' => '22SA11A999',
            'firstname' => 'Azizi',
            'lastname' => 'Asadhel',
            'address' => 'Jakarta',
            'age' => '19',
            'created_date' => Time::now(),
            'updated_date' => Time::now()
        ]
        ];
        // insert semua data ke tabel
        $this->db->table('users')->insertBatch($data);
        //singgle insert
        //->insert($data);
        //multiple insert
        //->insertBatch($data);
        }
    }
}
