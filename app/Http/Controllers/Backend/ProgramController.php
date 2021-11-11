<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class ProgramController extends Controller
{
    public function index()
    {
        $data = Program::all();
        return view('admin.Programs.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Programs.create');
    }

    public function edit($id)
    {
        $data = Program::find($id);
        $parents = Program::where('id')->get();
        return view('admin.Programs.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'image' => 'required',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $Program = new Program;
            $Program->title = $request->title;
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
            $Program->image = $imageName;
            $Program->save();

            return redirect()->route('program.index')->with("success","Program successfuly created!");

        } catch (\Exception $e) {
            return redirect('program.index')->with('error',$e);
        }


	}

    
    public function update(Request $request,$id){
        try {
            $Program = Program::find($id);
            $Program->title = $request->title;

            if ($request->file('image')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->image->getClientOriginalExtension(); 
                $request->image->move(public_path('upload'), $imageName);
                $Program->image = $imageName;
                
            }
            $Program->save();

            return redirect()->route('program.index')->with("success","program successfuly updated!");

        } catch (\Exception $e) {
            return redirect('program.index')->with('error',$e);
        }


	}
    public function destroy($id)
    {
        try {
            Program::find($id)->delete();
            return redirect()->route('program.index')->with('success',"Program successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }

 


}
