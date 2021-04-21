<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user with submissions
        User::factory(['username' => 'user1', 'is_admin' => false, 'is_alive' => true])
            ->hasSubmissions(5)
            ->create();

        // user with submissions
        User::factory(['username' => 'user2', 'is_admin' => false, 'is_alive' => true])
            ->hasSubmissions(3)
            ->create();

        // admin user
        User::factory(['username' => 'admin', 'is_admin' => true])
            ->create();

        // api user
        User::factory(['api_token' => '12345'])->create();
    }
}
