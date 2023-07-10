<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    public function show(Post $post)
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
