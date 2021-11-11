<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Menu;
use Validator;
use DB;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::all();
        return view('admin.role.index',compact('data'));
    }

    public function create()
    {
        $permissions = Role::getListPermission();
        return view('admin.role.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),[
                "name" => "required"
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            DB::beginTransaction();
            if (!empty ($request->permissions)) {
                foreach ($request->permissions as $key => $value) {
                    $temp[$key] = ($value == 1 ? TRUE:FALSE);
                }
                $request['permissions'] = $temp;
            }
            $role = Role::create($request->all());
            DB::commit();
            return redirect()->route('role.index')->with('success','Role successfuly created!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Role::getListPermission();
        $menu = Menu::get();
        return view('admin.role.edit',compact('role','permissions','menu'));
    }

    public function update(Request $request,$id)
    {
        try {
            if (!$request->permissions) {
              $temp = array();
            }else{
              foreach ($request->permissions as $key => $value) {
                $temp[$key] = ($value == 1 ? TRUE:FALSE);
              }
            }
  
              $request['permissions'] = $temp;
              Role::find($id)->update( $request->all() );

              return redirect()->route( 'role.index' )->with('success',"Role successfuly edited!");
          } catch (Exception $e) {
              return back()->with('error',$e->getMessage());
          }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Role::find($id)->delete();
            DB::commit();

            return redirect()->back()->with('success','Role successfuly deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
