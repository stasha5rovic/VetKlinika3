@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
        
                <h1 class="display-one mt-5">{{config('app.name')}}</h1>
                <br><br><br><br><br>
                <p> <b>Dobro došli na sajt naše klinike! Ako imate nalog, ulogujte se:</b></p>
                <br><br><br><br>
                <a href="/users" class="btn btn-outline-primary">Administrator</a>
                <a href="/animals" class="btn btn-outline-primary">Zaposleni</a>
                <a href="/visits" class="btn btn-outline-primary">Klijent</a>
    
               
            </div>
        </div>
    </div>

@endsection