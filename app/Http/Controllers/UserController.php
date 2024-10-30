<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;




class UserController extends Controller
{
    public function welcomepost(){
        return  view('welcome');
    }
    public function storepost(){
        return view('store');
    }
    // public function storedata(){
    //     return view('store');
    // }
    public function showpost(){
        $post = UserPost::all();
        return view('showpost', ['post' => $post]);
    }
    public function storedata(Request $request){
        $post = new UserPost;
        $post->auther_name = $request->auther_name;
        $post->auther_title = $request->auther_title;
        $post->auther_post = $request->auther_post;
        $post->save();
        return redirect('showpost');
    }
    public function deletedata($id)
    {
         $post = UserPost::findOrFail($id);
         $post->delete();

         return redirect('showpost');
    }
    public function showuser(){
        return view('showuser');
    }
}
