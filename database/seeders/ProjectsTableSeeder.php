<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Personal Portfolio',
                'description' => 'A personal portfolio website showcasing projects and skills.',
                'image' => 'assets/img/portfolio-1.jpg',
            ],
            [
                'title' => 'E-commerce Demo',
                'description' => 'A small e-commerce demo with cart and checkout flows.',
                'image' => 'assets/img/portfolio-2.jpg',
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A simple blog platform with posts, tags and comments.',
                'image' => 'assets/img/portfolio-3.jpg',
            ],
        ];

        foreach ($projects as $p) {
            Project::create($p);
        }
    }
}
