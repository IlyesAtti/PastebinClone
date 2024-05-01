<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function AddPost(Request $req) {
        $post = new Post;
        $post->text=$req->Text;
        $post->teaster = substr($req->Text, 0, 25);
        $post->save();
        return redirect('/');
    }

    function show(){
        $data=Post::all();
        return view('Welcome', ['post' => $data]);
    }
    
    public function list($id) {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }
}
