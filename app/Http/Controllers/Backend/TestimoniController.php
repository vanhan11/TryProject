<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = Testimoni::all();
        return view('admin.Testimoni.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Testimoni.create');
    }

    public function edit($id)
    {
        $data = Testimoni::find($id);
        $parents = Testimoni::where('id')->get();
        return view('admin.Testimoni.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'deskripsi' => 'required',
                'image' => 'required',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $Testimoni = new Testimoni;
            $Testimoni->title = $request->title;
            $Testimoni->deskripsi = $request->deskripsi;
            $path = public_path().'/upload'; 
            $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension();
            $path = public_path().'/upload'; 
            if(!File::exists($path)) {
                mkdir($path,0775,TRUE);
                // File::makeDirectory($path,0775, true, true);
                $request->image->move(public_path('upload'), $imageName);
            }
            else {
                $request->image->move(public_path('upload'), $imageName);
            } 
            $Testimoni->image = $imageName;
            $Testimoni->save();

            return redirect()->route('testimoni.index')->with("success","testimoni articel successfuly created!");

        } catch (\Exception $e) {
            return redirect('testimoni.index')->with('error',$e);
        }


	}

    
    public function update(Request $request,$id){
        try {
            // $valid = [
            //     'title' => 'required',
            //     'deskripsi' => 'required',
            //     'image',
            // ];

            // $validator = Validator::make($request->all(),$valid);
            // if($validator->fails()) {
            //     return redirect()->back()->withErrors($validator);
            // }

            $Testimoni = Testimoni::find($id);
            $Testimoni->title = $request->title;
            $Testimoni->deskripsi = $request->deskripsi;

            if ($request->file('image')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload'), $imageName);
                $Testimoni->image = $imageName;
                
            }
            $Testimoni->save();

            return redirect()->route('testimoni.index')->with("success","testimoni articel successfuly updated!");

        } catch (\Exception $e) {
            return redirect('testimoni.index')->with('error',$e);
        }


	}
    public function destroy($id)
    {
        try {
            Testimoni::find($id)->delete();
            return redirect()->route('testimoni.index')->with('success',"testimoni successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }


}
