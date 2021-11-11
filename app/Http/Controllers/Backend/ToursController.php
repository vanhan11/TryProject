<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tours;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class ToursController extends Controller
{
    public function index()
    {
        $data = Tours::all();
        return view('admin.Tours.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Tours.create');
    }

    public function edit($id)
    {
        $data = Tours::find($id);
        $parents = Tours::where('id')->get();
        return view('admin.Tours.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'tanggal' => 'required',
                'deskripsi' => 'required',
                'image' => 'required',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $Tours = new Tours;
            $Tours->title = $request->title;
            $Tours->deskripsi = $request->deskripsi;
            $Tours->tanggal = $request->tanggal;
            $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension();
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
            $Tours->image = $imageName;
            $Tours->save();

            return redirect()->route('tours.index')->with("success","tours articel successfuly created!");

        } catch (\Exception $e) {
            return redirect('tours.index')->with('error',$e);
        }


	}

    
    public function update(Request $request,$id){
        try {
            $Tours = Tours::find($id);
            $Tours->title = $request->title;
            $Tours->deskripsi = $request->deskripsi;
            $Tours->tanggal = $request->tanggal;
            
            if ($request->file('image')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload'), $imageName);
                $Tours->image = $imageName;
            }
            $Tours->save();

            return redirect()->route('tours.index')->with("success","tours articel successfuly updated!");

        } catch (\Exception $e) {
            return redirect('tours.index')->with('error',$e);
        }


	}
    public function destroy($id)
    {
        try {
            Tours::find($id)->delete();
            return redirect()->route('tours.index')->with('success',"Tours successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }

}
