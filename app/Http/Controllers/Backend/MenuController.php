<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Menu;
use Validator;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        return view('admin.menu.index',compact('data'));
    }

    public function create()
    {
        $parents = Menu::where('parent_id', 0)->get();
        return view('admin.menu.create',compact('parents'));
    }

    public function store(Request $request)
    {
        try {
            $valid = [
                'type' => 'required',
                'name' => 'required',
            ];
            if($request->type == "child") {
                $valid += ['child' => 'required'];
            }
            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $menu = new Menu;
            $menu->parent_id = ($request->type == "parent") ? 0 : $request->child;
            $menu->name = $request->name;
            $menu->icon = $request->icon;
            $menu->url = isset($request->url) ? $request->url : "#";
            $menu->is_active = isset($request->is_active) ? true : false;
            $menu->save();

            return redirect()->route('menu.index')->with("success","Menu successfuly created!");

        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e);
        }
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        $parents = Menu::where('parent_id', 0)->get();
        return view('admin.menu.edit',compact('menu','parents'));
    }

    public function update(Request $request,$id)
    {
        try {
            $valid = [
                'type' => 'required',
                'name' => 'required',
            ];
            if($request->type == "child") {
                $valid += ['child' => 'required'];
            }
            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $menu = Menu::find($id);
            $menu->parent_id = ($request->type == "parent") ? 0 : $request->child;
            $menu->name = $request->name;
            $menu->icon = $request->icon;
            $menu->url = isset($request->url) ? $request->url : "#";
            $menu->is_active = isset($request->is_active) ? true : false;
            $menu->save();

            return redirect()->route('menu.index')->with("success","Menu successfuly updated!");

        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e);
        }
    }

    public function destroy($id)
    {
        try {
            Menu::find($id)->delete();
            return redirect()->route('menu.index')->with('success',"Menu successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }
}
