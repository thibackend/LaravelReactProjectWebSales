<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = [
            [
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'thi.a24@student.passerellesnumeriques.org',
                'password' => Hash::make('password'),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
            ]
            // Add more user data arrays as needed;
        ];
        if (!User::all()->count()) :
            foreach ($users as $value) :
                User::create($value);
            endforeach;
        endif;
    }
}
