<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Upcoming;
use Illuminate\Support\Facades\File;
use Validator;

class UpcomingController extends Controller
{
    public function index()
    {
        $data = Upcoming::all();
        return view('admin.upcoming.index',compact('data'));
    }

    public function create()
    {
        return view('admin.upcoming.create');
    }

    public function edit($id)
    {
        $data = Upcoming::find($id);
        $parents = Upcoming::where('id')->get();
        return view('admin.upcoming.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'tanggal' => 'required',
                'deskripsi' => 'required',
                'image',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $Upcoming = new Upcoming;
            $Upcoming->title = $request->title;
            $Upcoming->deskripsi = $request->deskripsi;
            $Upcoming->tanggal = $request->tanggal;
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
            $Upcoming->image = $imageName;
            $Upcoming->save();

            return redirect()->route('upcoming.index')->with("success","Upcoming articel successfuly created!");

        } catch (\Exception $e) {
            return redirect('upcoming.index')->with('error',$e);
        }


	}

    
    public function update(Request $request,$id){
        try {

            $Upcoming = Upcoming::find($id);
            $Upcoming->title = $request->title;
            $Upcoming->deskripsi = $request->deskripsi;
            $Upcoming->tanggal = $request->tanggal;
            
            if ($request->file('image')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension(); 
                $request->image->move(public_path('upload'), $imageName);
                $Upcoming->image = $imageName;
                
            }
            $Upcoming->save();

            
           

            return redirect()->route('upcoming.index')->with("success","Upcoming articel successfuly updated!");

        } catch (\Exception $e) {
            return redirect('upcoming.index')->with('error',$e);
        }


	}
    public function destroy($id)
    {
        try {
            Upcoming::find($id)->delete();
            return redirect()->route('upcoming.index')->with('success',"Upcoming successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }

}
