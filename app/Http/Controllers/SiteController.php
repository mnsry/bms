<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function posts(Page $page)
    {
        return view('post.index',[
            'page' => $page
        ]);
    }

    public function post(Post $post)
    {
        return view('post.show',[
            'post' => $post
        ]);
    }

    public function form(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:255' ,
            'mobile' => 'required|min:10' ,
        ]);
        Form::create([
            'name' => $request->name ,
            'mobile' => $request->mobile ,
        ]);
        $request->session()->flash("form","created");
        return redirect()->route("index");
    }
}
