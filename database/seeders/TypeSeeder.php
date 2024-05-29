<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Frontend', 'Backend', 'FullStack', 'Frontend HTML & CSS', 'Frontend HTML & Boostrap', 'JS', 'VueJS', 'Laravel', 'PHP'];

        foreach ($types as $one_type) {
            $type = new Type();
            $type->name = $one_type;
            $type->slug = Str::slug($one_type, '-'); 
            $type->save();
        }
    } 
}

