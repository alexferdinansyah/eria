<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PublicationSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'image' => 'publications/placeholder.png',
                'title' => $faker->sentence,
                'desc'  => $faker->paragraph,
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Using the Query Builder
            $this->db->table('publications')->insert($data);
        }
    }
}
