<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'description' => 'Administrator Group'
        ]);
        Role::create([
            'name' => 'Project Manager',
            'slug' => 'project-manager',
            'description' => 'Administrator Group'
        ]);
        Role::create([
            'name' => 'Team Leader',
            'slug' => 'team-leader',
            'description' => 'Administrator Group'
        ]);
        Role::create([
            'name' => 'Developer',
            'slug' => 'developer',
            'description' => 'Administrator Group'
        ]);
    }
}
