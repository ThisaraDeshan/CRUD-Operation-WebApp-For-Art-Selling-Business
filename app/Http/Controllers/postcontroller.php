<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class postcontroller extends Controller
{
    public function store(request $request){

        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'description' => 'required',
        ]);

        if($validator->fails()){
            return back()->with('status','Something Went Wrong');
        }else{

            $imagename =time().".".$request->image->extension();

            $request->image->move(public_path('images'), $imagename);

            post::create([
                'user_id'=>auth()->user()->id,
                'title'=>$request->title,
                'description'=>$request->description,
                'image' =>$imagename,
            ]);

        }
        return redirect(route('allposts'))->with('status','New Post Added!');

    }


    public function show($postid){

        $post=post::findOrfail($postid);

        return view('show',compact('post'));
    }

    public function back(){
        $posts=post::all();
        return view('welcome',compact('posts'));
    }

    public function allposts(){
        $posts=post::where('user_id',Auth::user()->id)->get();
        return view('allposts',compact('posts'));
    }

    public function edit($postid){
        $post=post::findOrfail($postid);
        return view('edit',compact('post'));
    }

    public function update($postid, Request $request){
        post::findOrfail($postid)->update($request->all());
        return redirect(route('allposts'))->with('status','Your Post Updated Successfully');
    }

    public function delete($postid){
        post::findOrfail($postid)->delete();
        return redirect(route('allposts'))->with('status','Your Post Deleted Successfully');
    }
}
