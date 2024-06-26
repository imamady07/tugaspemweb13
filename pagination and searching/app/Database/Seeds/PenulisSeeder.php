<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends Seeder
{
  public function run()
  {
    // $data = [
    //   [
    //     'nama' => 'Maulana',
    //     'alamat' => 'Godong',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ],
    //   [
    //     'nama' => 'Arif',
    //     'alamat' => 'Gudo',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ],
    //   [
    //     'nama' => 'Muzaqi',
    //     'alamat' => 'Jombang',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ]
    // ];

    $faker = \Faker\Factory::create('id_ID');
    for ($i = 0; $i < 100; $i++) {

      $data = [
        'nama' => $faker->name,
        'alamat' => $faker->address,
        'created_at' => Time::createFromTimestamp($faker->unixTime()),
        'updated_at' => Time::now()
      ];
      $this->db->table('penulis')->insert($data);
    }

    // Simple Queries
    // $this->db->query('INSERT INTO penulis (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

    // Using Query Builder
    // $this->db->table('penulis')->insert($data);
    // $this->db->table('penulis')->insertBatch($data);
  }
}