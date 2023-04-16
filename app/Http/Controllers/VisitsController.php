<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $animals = Animal::all();
        $users = DB::table('users')->where('type', '=', 'client')->get();
        return view('visits.create', [
            'animals' => $animals,
            'users' => $users,
        ]);
      
    }

    public function store(Request $request)
    {
            $newVisit = Visit::create([
            'animal_id' => $request->animalId,
            'user_id' => $request->userId,
            'date' => $request->date,
            'diagnosis' => $request->diagnosis,
            'meds' => $request->meds
        ]);

        return redirect('visits/' . $request->animalId);
    }

   
    public function show($animalId)
    {
        $visits = DB::table('visits')->where('animal_id', '=', $animalId)->get();
        return view('visits.show', [
            'visits'=>$visits
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
