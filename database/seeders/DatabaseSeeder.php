<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Domain\User\Models\Login;
use Domain\User\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(60)->create()->each(function (User $user) {
            $user->logins()->createMany(Login::factory(500)->make()->toArray());
        });
    }
}
