@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Strana za zaposlene</h1>
                    <p>Lista svih pacijenata:</p>
                </div>
                <div class="col-4">
                    
                    <a href="/animals/create/animal" class="btn btn-primary btn-sm">Novi pacijent</a>
                </div>
            </div>

            <table class="table table-sm">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vrsta</th>
                        <th>Ime</th>
                        <th>Datum rođenja</th>
                        <th>Težina</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($animals as $animal)
                    <tr>
                        <td> {{$animal->id}} </td>
                        <td><a href="./animals/{{ $animal->id }}"> {{$animal->animalName}} </a></td>
                        <td> {{$animal->animalType}} </td>
                        <td> {{$animal->dob}} </td>
                        <td> {{$animal->weight}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection