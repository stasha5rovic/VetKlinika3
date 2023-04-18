<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Visit;

class ClientsController extends Controller
{
    public function index()
    {   
       
        $user = Auth::user();
        $userId = $user->id;

        $visits = Visit::all();

        $user_visits = [];
        foreach($visits as $visit){
            if($userId == $visit->user_id){
                $user_visits[] = $visit;
            }
        }
        return view('clients.index', [
            'user_visits'=>$user_visits
        ]);
       
    }
}
