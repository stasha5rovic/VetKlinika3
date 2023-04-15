<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users'=>$users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $newUser = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'type'=>$request->type,
        ]);

        return redirect('users/' . $newUser->id);
    }

    public function show($userId)
    {
        $user = User::find($userId);
        return view('users.show', [
            'user'=>$user
        ]);
    }

    public function edit($userId)
    {
        $user = User::find($userId);
        return view('users.edit', [
            'user'=>$user
        ]);
    }

    public function update(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'type'=>$request->type,
        ]);

        return redirect('users/' . $user->id);

    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete;
        return redirect('/users');
    }
}
