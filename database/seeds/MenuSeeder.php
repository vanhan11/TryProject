<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();

        $menus = [
          // parent_id = 1 ( Dashboard )
          [
            'parent_id' => 0,
            'name'      => 'Dashboard',
            'icon'      => 'fa-home',
            'url'       => '/',
            'is_active' => true
          ],
          // parent_id = 2 ( Administrator )
          [
            'parent_id' => 0,
            'name'      => 'Administration',
            'icon'      => 'fa-cogs',
            'url'       => '#',
            'is_active' => true
          ], 
          //  -- -- -- -- -- -- -- -- -- -- \\
          [
            'parent_id' => 2,
            'name'      => 'User',
            'icon'      => '',
            'url'       => 'administration/user',
            'is_active' => true
          ],
          [
            'parent_id' => 2,
            'name'      => 'Role',
            'icon'      => '',
            'url'       => 'administration/role',
            'is_active' => true
          ],
          [
            'parent_id' => 2,
            'name'      => 'Menu',
            'icon'      => '',
            'url'       => 'administration/menu',
            'is_active' => true
          ],
          //Parent Id 6 (Administrator)
          [
            'parent_id' => 0,
            'name'      => 'Content Post',
            'icon'      => 'fa-globe',
            'url'       => '#',
            'is_active' => true
          ], 
          //  -- -- -- -- -- -- -- -- -- -- \\
          [
            'parent_id' => 6,
            'name'      => 'Blog',
            'icon'      => '',
            'url'       => 'posting/blog',
            'is_active' => true
          ],
          [
            'parent_id' => 6,
            'name'      => 'Program',
            'icon'      => '',
            'url'       => 'posting/program',
            'is_active' => true
          ],
          [
            'parent_id' => 6,
            'name'      => 'Protected',
            'icon'      => '',
            'url'       => 'posting/protected',
            'is_active' => true
          ],
          [
            'parent_id' => 6,
            'name'      => 'Testimonial',
            'icon'      => '',
            'url'       => 'posting/testimoni',
            'is_active' => true
          ],
          [
            'parent_id' => 6,
            'name'      => 'Tours',
            'icon'      => '',
            'url'       => 'posting/tours',
            'is_active' => true
          ],
          [
            'parent_id' => 6,
            'name'      => 'Upcoming',
            'icon'      => '',
            'url'       => 'posting/upcoming',
            'is_active' => true
          ],
          //CONTACT
          [
            'parent_id' => 0,
            'name'      => 'Contact',
            'icon'      => 'fa-paper-plane',
            'url'       => '#',
            'is_active' => true
          ],
          
          [
            'parent_id' => 13,
            'name'      => 'Feed Back',
            'icon'      => '',
            'url'       => 'feed/index',
            'is_active' => true
          ],
        ];
    
        foreach ( $menus as $key => $data ) {
          Menu::create( $data );
        }
    }
}
