<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Validator;
use Sentinel;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.user.index',compact('data'));
    }

    public function create()
    {
        foreach(Role::where('id','!=', 1)->get() as $role) {
            $roles[$role->slug] = $role->name;
        }
        return view('admin.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "email" => "required|unique:users",
                "password" => "required|same:password_confirmation",
                "role" => "required"
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $request['is_active'] = (isset($request->is_active) ? 1 : 0);
            $user = Sentinel::registerAndActivate( [
                "email" => $request->email,
                "password" => $request->password,
                "name" => $request->name,
                "is_active" => $request->is_active,
                "role_name" => $request->role
            ] );
            Sentinel::findRoleBySlug( $request->input('role') )->users()->attach( $user );
            DB::commit();
            return redirect()->route('user.index')->with('success','User successfuly created!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    } 

    public function edit($id)
    {
        $user = Sentinel::findUserById($id);
        foreach(Role::where('id','!=', 1)->get() as $role) {
            $roles[$role->slug] = $role->name;
        }
        return view('admin.user.edit',compact('roles','user'));
    }

    public function update(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "password" => "same:password_confirmation",
                "role" => "required"
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $request['is_active'] = (isset($request->is_active) ? 1 : 0);

            $user = Sentinel::findUserById($id);

            $role = Sentinel::findRoleByName($user->roles()->first()->name);
            $role->users()->detach($user);
            $role = Sentinel::findRoleBySlug( $request->input('role') )->users()->attach( $user );

            if($request->password !== null) {
                Sentinel::update($user,$request->all());
            }else {
                Sentinel::update($user,$request->except(['password','password_confirmation']));
            }
            DB::commit();
            return redirect()->route('user.index')->with('success','User successfuly updated!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            return redirect()->route('user.index')->with('success','User successfuly deleted!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
