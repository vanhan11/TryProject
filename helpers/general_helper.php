<?php
      
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\Menu;

if (! function_exists('permission_val')) {

    function permission_val($id,$permission)
    {
        $role = Role::find($id);
        $format = json_decode(json_encode($role),true);
    
        $result = (isset($format['permissions'][$permission]) && $format['permissions'][$permission] != ''  ? 1 : 0);
        return $result;
    }
   
}

if (! function_exists('admin_check')) {

    function admin_check( $permission )
    {
        if ( $user = Sentinel::check() ) {
            if( ! $user->isSuperAdmin() ) {
                if ( ! Sentinel::hasAnyAccess( $permission ) ) {
                    return false;
                }
            }

            return true;
        }

        return false;
    }

}

if(! function_exists('define_child')) {

    function define_child($parent_id) {
        $child = Menu::Where('parent_id',$parent_id)->where('is_active',TRUE)->get();
    
        return $child;
    }
    
}

       