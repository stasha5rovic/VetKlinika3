@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/animals" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Unos novog pacijenta</h1>
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="type">Vrsta:</label>
                                <input type="text" id="type" class="form-control" name="type"
                                       placeholder="Unesite vrstu" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="name">Ime:</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Unesite ime"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="dob">Datum rođenja:</label>
                                <input type="date" id="dob" class="form-control" name="dob" placeholder="Unesite datum rođenja"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12">
                                <label for="weight">Težina:</label>
                                <input type="text" id="weight" class="form-control" name="weight"
                                       placeholder="Unesite težinu" required>
                            </div>
                                                       
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Zapamti pacijenta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection