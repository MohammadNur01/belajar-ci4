<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
  public function run()
  {
    // $data = [
    //   [
    //     'nama' => 'Mohammd Nur',
    //     'alamat'    => 'Jl. Sultan Agung No. 31',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ],
    //   [
    //     'nama' => 'Mohammd Chyadi',
    //     'alamat'    => 'Jl. Sultan Agung No. 32',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ],
    //   [
    //     'nama' => 'Nur Ahmadi',
    //     'alamat'    => 'Jl. Sultan Agung No. 33',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now()
    //   ]
    // ];
    $faker = \Faker\Factory::create('id_ID');
    for ($i = 0; $i < 100; $i++) {


      $data = [
        'nama' => $faker->name,
        'alamat'    => $faker->address,
        'created_at' => TIme::createFromTimestamp($faker->unixTime()),
        'updated_at' => Time::now()
      ];
      $this->db->table('orang')->insert($data);
    }
    // Simple Queries
    // $this->db->query("INSERT INTO orang (nama, alamat,created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

    // Using Query Builder
    // $this->db->table('orang')->insertBatch($data);
  }
}
