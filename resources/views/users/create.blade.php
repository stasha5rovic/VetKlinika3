@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/users" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Unos novog korisnika</h1>
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Ime i prezime:</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Unesite ime korisnika" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="email">Email:</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Unesite email"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="password">Lozinka:</label>
                                <input type="text" id="password" class="form-control" name="password" placeholder="Unesite lozinku"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12">
                                <label for="phone">Broj telefona:</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                       placeholder="Unesite broj telefona" required>
                            </div>

                            <div class="control-group col-12">
                                <label for="type">Tip korisnika:</label>
                                <input type="text" id="type" class="form-control" name="type"
                                       placeholder="Unesite tip korisnika" required>
                            </div>
                                                       
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Zapamti korisnika
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection