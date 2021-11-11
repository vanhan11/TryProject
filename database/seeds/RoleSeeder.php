<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();

        Sentinel::getRoleRepository()->createModel()->create([
            'slug' => 'super-admin',
            'name' => 'super admin',
            'permissions' => [
                'admin' => true
            ]
        ]);

        Sentinel::getRoleRepository()->createModel()->create([
            'slug' => 'admin',
            'name' => 'Admin',
            'permissions' => [
                'administration' => true,
                'user' => true,
                'content-post' => true,
                'blog' => true,
                'program' => true,
                'protected' => true,
                'testimonial' => true,
                'tours' => true,
                'upcoming' => true,
                'contact' => true,
                'feed-back' => true
            ]
        ]);

        Sentinel::getRoleRepository()->createModel()->create([
            'slug' => 'user',
            'name' => 'user',
            'permissions' => [
                'admin' => false
            ]
        ]);



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
