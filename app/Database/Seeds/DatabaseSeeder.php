<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0');

        // Enable foreign key checks
        $programCount = $this->db->table('programs')->countAllResults();
        if ($programCount > 0) {
            // If not empty, truncate the tables
            $this->db->table('news')->truncate();
            $this->db->table('programs')->truncate();
            $this->db->table('articles')->truncate();
            $this->db->table('publications')->truncate();
        }
        $this->db->query('SET FOREIGN_KEY_CHECKS = 1');

        $this->call('ProgramSeeder');
        $this->call('NewsSeeder');
        $this->call('ArticleSeeder');
        $this->call('PublicationSeeder');
    }
}
