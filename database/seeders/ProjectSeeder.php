<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->title = $faker->words(8, true);
            $project->cover_image = $faker->imageUrl(640, 400, 'Projects', true, $project->name, true, 'jpg');
            $project->description = $faker->paragraphs(4, true); 
            $project->tools = $faker->words(8, true);
            $project->project_url = $faker->url();
            $project->source_code_url = $faker->url();
            $project->slug = Str::of($project->title)->slug('-');
            $project->save();
        }
    }
}
