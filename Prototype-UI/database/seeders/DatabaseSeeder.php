<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // QCM Seeder
        DB::table('qcms')->insert([
            ['title' => 'Math Quiz', 'description' => 'A quiz on basic mathematics', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Science Quiz', 'description' => 'A quiz on basic science concepts', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Question Seeder
        DB::table('questions')->insert([
            ['qcm_id' => 1, 'text' => 'What is 2 + 2?', 'type' => 'single', 'created_at' => now(), 'updated_at' => now()],
            ['qcm_id' => 1, 'text' => 'What is 5 x 6?', 'type' => 'single', 'created_at' => now(), 'updated_at' => now()],
            ['qcm_id' => 2, 'text' => 'What is the chemical symbol for water?', 'type' => 'single', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Choice Seeder
        DB::table('choices')->insert([
            ['question_id' => 1, 'text' => '4', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 1, 'text' => '5', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 2, 'text' => '30', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 2, 'text' => '30.5', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'text' => 'H2O', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'text' => 'CO2', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Apprenant Seeder
        DB::table('apprenants')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

        // Formateur Seeder
        DB::table('formateurs')->insert([
            ['name' => 'Alice', 'email' => 'alice@example.com', 'password' => bcrypt('admin123'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'password' => bcrypt('admin123'), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Resultat Seeder
        DB::table('resultats')->insert([
            ['qcm_id' => 1, 'apprenant_id' => 1, 'score' => 80, 'completed_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['qcm_id' => 2, 'apprenant_id' => 2, 'score' => 95, 'completed_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
