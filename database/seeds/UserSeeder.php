<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('activations')->truncate();
        DB::table('persistences')->truncate();
        DB::table('reminders')->truncate();
        DB::table('throttle')->truncate();

        $data = [
            [
                'name' => 'Max Holloway',
                'email' => 'superadministrator@app.com',
                'name' => 'Super Administrator',
                'password' => 'pwd12345',
                'role' => 'super-admin',
            ],
            [
                'name' => 'Admin Goreala',
                'email' => 'admin@app.com',
                'name' => 'Administrator',
                'password' => 'password',
                'role' => 'admin',
            ]

        ];

        foreach($data as $u) {
            $user = Sentinel::registerAndActivate( [
                'email' => $u[ 'email' ],
                'name' => $u[ 'name' ],
                'password' => $u[ 'password' ],
                'role_name' => $u['role']
            ] );
            Sentinel::findRoleBySlug( $u[ 'role' ] )->users()->attach( $user );
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
