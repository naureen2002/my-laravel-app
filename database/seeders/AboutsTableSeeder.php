<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'Naureen',
            'title' => 'Full Stack Developer',
            'description' => 'Passionate developer building web applications with Laravel and modern JS frameworks.',
        ]);
    }
}
