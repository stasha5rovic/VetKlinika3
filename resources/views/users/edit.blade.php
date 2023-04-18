@extends('layouts.clinic')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/users" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Izmena podataka korisnika</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Ime i prezime</label>
                                <input type="text" id="name" class="form-control" name="name"
                                value="{{ $user->name }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="email">Email:</label>
                                <input type="text" id="email" class="form-control" name="email" 
                                value="{{ $user->email }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="password">Lozinka:</label>
                                <input type="text" id="password" class="form-control" name="password"
                                value="{{ $user->password }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="phone">Broj telefona:</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                value="{{ $user->phone }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="type">Tip korisnika:</label>
                                <input type="text" id="type" class="form-control" name="type"
                                value="{{ $user->type }}" required>
                            </div>

                         
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Zapamti izmene
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection