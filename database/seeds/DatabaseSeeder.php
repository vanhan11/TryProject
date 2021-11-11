<?php

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
        // Role Seeder
        $this->call(RoleSeeder::class);
        // User Seeder
        $this->call(UserSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
