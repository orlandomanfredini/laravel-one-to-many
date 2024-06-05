<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for($i = 0; $i < 24; $i++){
            $new_project = new Project();
            $title = $faker->name();
            $new_project->title=$title;
            $new_project->slug= Str::slug($title);
            $new_project->description=$faker->text(45);
            $new_project->save();

        }
    }
}
