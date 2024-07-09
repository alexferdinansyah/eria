<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('en_US');

        // Fetch all program IDs to associate articles with programs
        $programModel = new \App\Models\ProgramModel();
        $programs = $programModel->findAll();
        $programIds = array_column($programs, 'id');

        for ($i = 0; $i < 15; $i++) {
            $data = [
                'program_id' => $faker->randomElement($programIds),
                'title'      => $faker->sentence,
                'content'    => $faker->paragraph,
                'image' => 'programs/placeholder.png',
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Using the Query Builder
            $this->db->table('articles')->insert($data);
        }
    }
}
