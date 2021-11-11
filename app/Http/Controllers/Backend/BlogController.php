<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Validator;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('admin.Blog.index',compact('data'));
    }

    public function create()
    {
        return view('admin.Blog.create');
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        $parents = Blog::where('id')->get();
        return view('admin.Blog.edit',compact('data','parents'));
    }

    public function store(Request $request){
        try {
            $valid = [
                'title' => 'required',
                'deskripsi' => 'required',
                'upload' => 'required|mimes:jpg,png,bmp,jpeg',
            ];

            $validator = Validator::make($request->all(),$valid);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->deskripsi = $request->deskripsi;
            $imageName = time() .'-'.Str::random(10).'.'.$request->upload->getClientOriginalExtension();
            $path = public_path().'/upload'; 
            if(!File::exists($path)) {
                mkdir($path,0775,TRUE);
                // File::makeDirectory($path,0775, true, true);
                $request->upload->move(public_path('upload'), $imageName);
            }
            else {
                $request->upload->move(public_path('upload'), $imageName);
            }  
            $blog->image = $imageName;
            $blog->save();

            return redirect()->route('blog.index')->with("success","blog articel successfuly created!");

        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }


	}

    
    public function update(Request $request,$id){
        try {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'deskripsi' => 'required',
            ]);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $blog = Blog::find($id);
            if ($request->file('upload')) {
                $imageName = time() .'-'.Str::random(10).'.'.$request->upload->getClientOriginalExtension(); 
                $request->upload->move(public_path('upload'), $imageName);
                $request['image'] = $imageName;
            }else {
                $request['image'] = $blog->image;
            }
            $blog->update($request->all());

            return redirect()->route('blog.index')->with("success","Blog articel successfuly updated!");

        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }

    }

    public function destroy($id)
    {
        try {
            Blog::find($id)->delete();
            return redirect()->route('blog.index')->with('success',"Blog successfuly deleted!");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }


}
