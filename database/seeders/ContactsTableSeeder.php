<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'email' => 'hello@example.com',
            'phone' => '+1-555-0100',
            'linkedin' => 'https://www.linkedin.com/in/example',
            'github' => 'https://github.com/example',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
