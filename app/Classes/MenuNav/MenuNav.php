<?php
/* -----------------------------------------------------
 | MenuNav
 | -----------------------------------------------------
 |
 | Create basic function to easier developing
 */

    namespace App\Classes\MenuNav;

    use Illuminate\Http\Request;
    use App\Models\Menu;
    use Sentinel;

    class MenuNav {

        /*Start For Backend Navigation*/
        public function menu() {
            $menus = Menu::where( 'is_active', 1 )->where('parent_id', 0)->get();
            $data = [];
            foreach ($menus as $i => $menu) {
                $childs = Menu::where('parent_id', $menu->id)->where('is_active',1)->orderBy('name', 'ASC')->get()->toArray();

                $result = array(
                    'id' => $menu->id,
                    'name' => $menu->name,
                    'url' => $menu->url,
                    'slug' => $menu->slug,
                    'icon' => $menu->icon,
                    'parent_id' => $menu->parent_id,
                    'child'     => $childs,
                    );

                array_push($data, $result);
            }

            return $data;
        }

        public function mainMenu( $url ) {

            $menus = $this->menu();

            $html = '<ul class="nav flex-column" role="tablist" id="kt_aside_toggle">';
            $user = Sentinel::check();
            if (!$user) {
                return redirect()->route('admin.auth.login');
            }

            foreach ($menus as $i => $menu) {
                if ($menu['url'] == '#' || empty($menu['url']) ) {
                    $url_menu = 'javascript:void(0)';
                } else {
                    $url_menu = $url .'/'. $menu['url'];
                }

                if ($user->hasAnyAccess([$menu['slug'],'admin'])  || $menu['slug'] == 'dashboard') {
                        $html .= '<li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="" data-original-title="'.$menu['name'].'">';
                        if(count($menu['child']) > 0) {
                            $html .= '<a href="#" class="nav-link btn btn-icon btn-clean btn-lg '.(\Request::is('*'.$menu["slug"].'*') ? "active":"").'" data-toggle="tab" role="tab" data-target="#'.$menu['slug'].'" >';
                            $html .= '<span class="svg-icon svg-icon-xl">';
                            $html .= '<i class="site-menu-icon fa '. $menu['icon'] .'" aria-hidden="true"></i>
                                     </span>
                                    </a>';
                        }else {
                            $html .= '<a href=" '. $url_menu .' " class="nav-link btn btn-icon btn-clean btn-lg '.(\Request::is('*'.$menu["slug"].'*') ? "active":"").'" >';
                            $html .= '<span class="svg-icon svg-icon-xl">';
                            $html .= '<i class="site-menu-icon fa '. $menu['icon'] .'" aria-hidden="true"></i>
                                     </span>
                                    </a>';
                        }
                        // if (count($menu['child']) > 0) {
                        //     $html .= '<div class="collapse" id="'. $menu['slug'] .'">';
                        //     $html .= '<ul class="nav">';
                        //     foreach ($menu['child'] as $j => $child) {
                        //     if ($user->hasAnyAccess([$child['slug'],'admin']) || $menu['slug'] == 'dashboard') {
                        //         $html .= '<li class="nav-item">
                        //                 <a class="nav-link" href=" '. $url . '/'. $child['url'] .' ">
                        //                     <span class="sidebar-mini"> '. str_split($child['name'])[0] .' </span>
                        //                     <span class="site-menu-title">'. $child['name'] .'</span>
                        //                 </a>
                        //             </li>';
                        //         }
                        //     }
                        //     $html .= '</ul>';
                        // }
                        $html .= '</li>';
                    }
                }

                $html .= '</ul>';

                return $html;
        }
        // paste html tadi disini
        

        public function subMenu( $url ) {
            $html = '<div class="tab-content">';
            $menus = $this->menu();

            $user = Sentinel::check();
            if (!$user) {
                return redirect()->route('admin.auth.login');
            }
            
            foreach ($menus as $i => $menu) {
                if ($menu['url'] == '#' || empty($menu['url']) ) {
                    $url_menu = 'javascript:void(0)';
                } else {
                    $url_menu = $url .'/'. $menu['url'];
                }
                
                if ($user->hasAnyAccess([$menu['slug'],'admin'])  || $menu['slug'] == 'dashboard') {
                        $html .= '<div class="tab-pane p-3 fade '.(\Request::is('*'.$menu["slug"].'*') ? "px-lg-7 py-lg-5 show active":"").'" id="'.$menu["slug"].'">';
                            $html .= '<div class="aside-menu-wrapper flex-column-fluid px-10 py-5" id="kt_aside_menu_wrapper">';
                                $html .= '<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">';
                                    $html .= '<ul class="menu-nav">';

                                    $html .= '<li class="menu-section">
                                                <h4 class="menu-text">'.$menu['slug'].'</h4>
                                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                            </li>';

                                        if(count($menu['child']) > 0) {
                                            foreach($menu['child'] as $k => $child) {
                                                if ($user->hasAnyAccess([$child['slug'],'admin']) || $menu['slug'] == 'dashboard') {
                                                    $html .= '<li class="menu-item '.(\Request::is('*'.$child["slug"].'*') ? "menu-item-active":"").'" aria-haspopup="true">
                                                                <a href="'. $url . '/'. $child['url'] .'" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="menu-text">'.$child['name'].'</span>
                                                                </a>
                                                            </li>'; 
                                                }else {
                                                    $html .= '';
                                                }
                                            }
                                        }
                                        $html .= '</ul">';
                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';
                    }
                }

                $html .= '</div>';

                return $html;
        }

        public function subMenuTest( $url ) {
            $html = '<div class="tab-content">';
            $menus = $this->menu();

            $user = Sentinel::check();
            if (!$user) {
                return redirect()->route('admin.auth.login');
            }
            
            foreach ($menus as $i => $menu) {
                if ($menu['url'] == '#' || empty($menu['url']) ) {
                    $url_menu = 'javascript:void(0)';
                } else {
                    $url_menu = $url .'/'. $menu['url'];
                }
                
                if ($user->hasAnyAccess([$menu['slug'],'admin'])  || $menu['slug'] == 'dashboard') {
                        $html = '<div class="tab-pane p-3 fade '.(\Request::is('*'.$menu["slug"].'*') ? "show active":"").'" id="'.$menu["slug"].'">';
                            $html .= '<div class="aside-menu-wrapper flex-column-fluid px-10 py-5" id="kt_aside_menu_wrapper">';
                                $html .= '<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">';
                                    $html .= '<ul class="menu-nav">';

                                    $html .= '<li class="menu-section">
                                                <h4 class="menu-text">'.$menu['slug'].'</h4>
                                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                            </li>';

                                        if(count($menu['child']) > 0) {
                                            foreach($menu['child'] as $k => $child) {
                                                if ($user->hasAnyAccess([$child['slug'],'admin']) || $menu['slug'] == 'dashboard') {
                                                    $html .= '<li class="menu-item '.(\Request::is('*'.$child["slug"].'*') ? "menu-item-active":"").'" aria-haspopup="true">
                                                                <a href="'. $url . '/'. $child['url'] .'" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="menu-text">'.$child['name'].'</span>
                                                                </a>
                                                            </li>'; 
                                                }else {
                                                    $html .= 'TEST';
                                                }
                                            }
                                        }
                                        $html .= '</ul">';
                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';
                    }
                }

                $html .= '</div>';

                return $html;
        }
    }
