<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Posts;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts()->orderBy('id','desc')->paginate(9);
        $data = [
            'user' => $user,
            'posts' => $posts,
        ];
        return view('users.show', $data);
    }

    public function edit($id)
    {
        if ($id == \Auth::id()){
            $user = \Auth::user();
            $data=[
                'user' => $user,
            ];
            return view('users.edit',$data);
        }
    }

    public function update(UserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //後ほどかの箇所は修正(ユーザー詳細画面に遷移するように修正)
        return back();
    }
}
