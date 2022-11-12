<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 100; $i++) { 

            Task::create([
                'id' => $i+1,
                'title' => $faker->text(25), 
                'description' => $faker->paragraph(1), 
                'status' =>  $faker->randomElement(['NOT_STARTED' ,'IN_PROGRESS', 'READY_FOR_TEST', 'COMPLETED ']), 
                'project_id' => $faker->randomElement(Project::pluck('id')),
                'user_id' => $faker->randomElement(User::pluck('id'))
            ]);
        }
    }
}
