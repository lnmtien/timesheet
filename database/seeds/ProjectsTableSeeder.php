<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->text($maxNbChars = 200),
                'pm_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'pl_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'kick_off' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'sign_off' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => $faker->randomElement([0, 1]),
            ]);
        }
    }
}
