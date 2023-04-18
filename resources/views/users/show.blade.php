@extends('layouts.clinic')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/users" class="btn btn-outline-primary btn-sm">Nazad</a>
                <h1 class="display-one">{{ ucfirst($user->name) }}</h1>
                <br>
                <ul>
                    <li>{{ ucfirst($user->email) }}</li>
                    <li>{{ ucfirst($user->password) }}</li>
                    <li>{{ ucfirst($user->phone) }}</li>
                    <li>{{ ucfirst($user->type) }}</li>
                </ul>
                
                <hr>
                <a href="/users/{{ $user->id }}/edit" class="btn btn-outline-primary">Izmeni korisnika</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE') 
                    @csrf
                    <button class="btn btn-danger">Obriši korisnika</button>
                </form>
            </div>
        </div>
    </div>
@endsection