@extends('layouts.clinic')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Strana za klijente</h1>
                    <p>Lista svih Vaših poseta:</p>
                </div>
            
            <table class="table table-sm">

                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Dijagnoza</th>
                        <th>Terapija</th>
                        </tr>
                </thead>
                <!-- <tbody>
                    @foreach($user_visits as $uv)
                    <tr>
                        <td> {{$uv->date}} </td>
                        <td> {{$uv->diagnosis}} </td>
                        <td> {{$uv->meds}} </td>
                    </tr>
                    @endforeach
                </tbody> -->
            </table>



        </div>
    </div>
</div>
@endsection