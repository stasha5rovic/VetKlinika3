<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    
    public function index()
    {
        $users = DB::table('users')->get();
        return $users;

    }

    
    public function create()
    {
        //
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

        return $newUser;
    }

   
    public function show(User $user)
    {
        
        return new UserResource($user);
    }

   
    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy($userid)
    {
        
        // $user = User::find($userid);
        // $user->delete;
    }
}
