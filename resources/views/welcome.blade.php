@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">

                <h1 class="display-one mt-10">{{ config('app.name') }}</h1>
                <br><br><br><br>
                <p><b> Dobro došli u našu Vet Kliniku!</b> </p>
                <br>
                <a href="/index" class="btn btn-outline-primary">Ulogujte se</a>
                </div>
            </div>
        </div>



@endsection