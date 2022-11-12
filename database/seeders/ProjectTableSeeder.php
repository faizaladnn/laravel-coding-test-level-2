<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10; $i++) { 

            Project::create([
                'id' => $i+1,
                'name' => $faker->text() . " " . $faker->randomAscii() . " " . $faker->randomElement(),
            ]);
        }
    }
}
