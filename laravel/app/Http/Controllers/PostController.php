<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        return view('post.create', compact('users'));
    }
//    リダイレクトのレスポンスを返しているから右に追記を入れてみた

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $post = Post::create([
            'name' => $request->name,
            'text' => $request->text,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all();

        return view('post.edit', compact('post', 'users'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('post.index');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index');
    }
}
