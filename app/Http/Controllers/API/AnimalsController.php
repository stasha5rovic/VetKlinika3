<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnimalResource;
use App\Http\Resources\AnimalCollection;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    
    public function index()
    {
        $animals = Animal::all();
        
        return new AnimalCollection($animals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $newAnimal = Animal::create([
            'animalType'=>$request->animalType,
            'animalName'=>$request->animalName,
            'dob'=>$request->dob,
            'weight'=>$request->weight,
        ]);

        return $newAnimal;
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        
        //Animal::find($animal)->delete;
       
    }
}
