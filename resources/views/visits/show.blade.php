@extends('layouts.clinic')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/animals" class="btn btn-outline-primary btn-sm">Nazad</a>
            <br>
            <table class="table table-sm">

                <thead>
                    <tr>
                        <th>ID pacijenta</th>
                        <th>ID vlasnika</th>
                        <th>Datum</th>
                        <th>Dijagnoza</th>
                        <th>Prepisana terapija</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visits as $visit)
                    <tr>
                        <td> {{$visit->animal_id}} </td>
                        <td> {{$visit->user_id}} </td>
                        <td> {{$visit->date}} </td>
                        <td> {{$visit->diagnosis}} </td>
                        <td> {{$visit->meds}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <hr>
            <a href="/visits/create/visit" class="btn btn-primary btn-sm">Dodaj novu posetu</a>
            <br><br>
        </div>
    </div>
</div>
@endsection