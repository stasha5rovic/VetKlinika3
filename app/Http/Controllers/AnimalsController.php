<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
   
    public function index() //get all
    {
        $animals = Animal::all();
        return $animals;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //get
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //post
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($animalId)   //get one
    {
        $animal = Animal::find($animalId);
        return $animal;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal) //get one
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)  //put
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)   //delete
    {
        //
    }
}
