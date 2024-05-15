<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // Below for loop take ages. Use above factory method instead

        // for ($i = 0; $i < 10; $i++)
        // {
        //     User::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->safeEmail(),
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('secret'), // bcrypt or Hash::make()
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
    }
}
