<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'image' => 'programs/placeholder.png',
                'title' => $faker->sentence,
                'desc'  => $faker->paragraph,
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Using the Query Builder
            $this->db->table('programs')->insert($data);
        }
    }
}
