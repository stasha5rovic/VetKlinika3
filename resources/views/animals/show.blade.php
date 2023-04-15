@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/animals" class="btn btn-outline-primary btn-sm">Nazad</a>
                <h1 class="display-one">{{ ucfirst($animal->animalName) }}</h1>
                <br>
                <ul>
                    <li>{{ ucfirst($animal->animalType) }}</li>
                    <li>{{ ucfirst($animal->dob) }}</li>
                    <li>{{ ucfirst($animal->weight) }}</li>
                </ul>
                
                <hr>
                <a href="/animals/{{ $animal->id }}/edit" class="btn btn-outline-primary">Izmeni podatke pacijenta</a>
                <br><br>
                <a href="/visits/{{ $animal->id }}" class="btn btn-outline-primary btn-sm">Prikaži sve posete pacijenta</a>
                <br><br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE') 
                    @csrf
                    <button class="btn btn-danger">Obriši pacijenta</button>
                </form>
            </div>
        </div>
    </div>
@endsection