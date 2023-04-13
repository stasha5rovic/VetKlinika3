@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Admin strana</h1>
                    <p>Lista svih korisnika:</p>
                </div>
                <div class="col-4">
                    
                    <a href="/users/create/post" class="btn btn-primary btn-sm">Dodaj korisnika</a>
                </div>
            </div>

            <table class="table table-sm">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime i prezime</th>
                        <th>Email adresa</th>
                        <th>Lozinka</th>
                        <th>Broj telefona</th>
                        <th>Tip korisnika</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->password}} </td>
                        <td> {{$user->phone}} </td>
                        <td> {{$user->type}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection