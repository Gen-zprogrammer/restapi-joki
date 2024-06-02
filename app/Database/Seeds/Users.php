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
            'username' => 'Friskha Amellia Eddy',
            'password' => '22SA11A276',
            'firstname' => 'Friskha',
            'lastname' => 'Eddy',
            'address' => 'Cilacap',
            'age' => '20',
            'created_date' => Time::now(),
            'updated_date' => Time::now()
        ],
        [
            'username' => 'ZEEPVNK',
            'password' => '22SA11A021',
            'firstname' => 'ZEE',
            'lastname' => 'PVNK',
            'address' => 'Banjarnegara',
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
