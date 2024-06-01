<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['php', 'sql', 'JS', 'VueJS', 'Laravel'];

        foreach ($technologies as $one_tech) {
            $technology = new Technology();
            $technology->name = $one_tech;
            $technology->slug = Str::slug($one_tech, '-'); 
            $technology->save();
        }
    }
}
