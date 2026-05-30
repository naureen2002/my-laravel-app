<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'PHP', 'percentage' => 90],
            ['name' => 'Laravel', 'percentage' => 85],
            ['name' => 'JavaScript', 'percentage' => 80],
            ['name' => 'Vue.js', 'percentage' => 70],
        ];

        DB::table('skills')->insert($skills);
    }
}
