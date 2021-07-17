<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//todo:ここでUserモデルを使うと宣言
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        //todo:ここでUserモデルを使ってデータベースから情報を取得
        return view('user.index',compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
//        todo:Userモデルを見に行って、fillableとかをチェク
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index');
    }

}
