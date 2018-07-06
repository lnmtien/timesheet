<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        
        $faker = \Faker\Factory::create();
        $password = Hash::make('12345678');
        
        User::create([
            'fullname' => 'Tien Le',
            'email' => 'lnmtien@gmail.com',
            'password' => $password,
        ]);
        
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'fullname' => $faker->name(null),
                'email' => $faker->unique()->email,
                'password' => $password,
                'birthday' => $faker->date('Y-m-d', 'now'),
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
