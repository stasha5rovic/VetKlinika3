<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
   
    public function index() 
    {
        $animals = Animal::all();
        return view('animals.index', [
            'animals'=>$animals
        ]);
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $newAnimal = Animal::create([
            'animalType'=>$request->type,
            'animalName'=>$request->name,
            'dob'=>$request->dob,
            'weight'=>$request->weight,
        ]);

        return redirect('animals/' . $newAnimal->id);
    }

    public function show($animalId)   //get one
    {
        $animal = Animal::find($animalId);
        return view('animals.show', [
            'animal'=>$animal
        ]);
    }

    public function edit(Animal $animal) 
    {
        //
    }

    public function update(Request $request, Animal $animal)  
    {
        //
    }

    public function destroy($animalId) 
    {
        $animal = Animal::find($animalId);
        $animal->delete;
        return redirect('/animals');
    }
}
