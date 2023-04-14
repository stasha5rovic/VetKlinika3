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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
