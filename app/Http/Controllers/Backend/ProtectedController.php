<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProtectedC;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class ProtectedController extends Controller
{
    public function index()
    {
        $data = ProtectedC::all();
        return view('admin.Protected.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Protected.create');
    }

    public function edit($id)
    {
        $data = ProtectedC::find($id);
        $parents = ProtectedC::where('id')->get();
        return view('admin.Protected.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'image',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $Protected = new ProtectedC;
            $Protected->title = $request->title;
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = public_path().'/upload';   
            if(!File::exists($path)) {
                mkdir($path,0775,TRUE);
                // File::makeDirectory($path,0775, true, true);
                $request->image->move(public_path('upload'), $imageName);
            }
            else {
                $request->image->move(public_path('upload'), $imageName);
            } 
            $Protected->image = $imageName;
            $Protected->save();


            return redirect()->route('protected.index')->with("success","Protected Content successfuly created!");

        } catch (\Exception $e) {
            return redirect('protected.index')->with('error',$e);
        }


	}

    
    public function update(Request $request,$id){
        try {
            // $valid = [
            //     'title' => 'required',
            //     'image' => 'required',
            // ];

            // $validator = Validator::make($request->all(),$valid);
            // if($validator->fails()) {
            //     return redirect()->back()->withErrors($validator);
            // }

            $Protected = ProtectedC::find($id);
            $Protected->title = $request->title;
            if ($request->file('image')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension(); 
                $request->image->move(public_path('upload'), $imageName);
                $Protected->image = $imageName;
                
            }
            $Protected->save();
            return redirect()->route('protected.index')->with("success","Protected Content successfuly updated!");

        } catch (\Exception $e) {
            return redirect('protected.index')->with('error',$e);
        }


	}
    public function destroy($id)
    {
        try {
            ProtectedC::find($id)->delete();
            return redirect()->route('protected.index')->with('success',"Protected Content successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }

 


}
