@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/animals" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Unos nove posete izabranog pacijenta</h1>
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="control-group col-12">
                                <label for="animalId">ID pacijenta:</label>
                                <select name="animalId" class="form-select">
                                @foreach ($animals as $animal)
                                    <option value="{{ $animal->id }}">
                                    {{ $animal->id }} - {{ $animal->animalName }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="control-group col-12">
                                <label for="userId">ID vlasnika:</label>
                                <select name="userId" class="form-select">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                    {{ $user->id }} - {{ $user->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="date">Datum posete:</label>
                                <input type="date" id="date" class="form-control" name="date"
                                        required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="diagnosis">Dijagnoza:</label>
                                <input type="text" id="diagnosis" class="form-control" name="diagnosis" placeholder="Unesite dijagnozu"
                                          rows="" required></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="meds">Terapija:</label>
                                <input type="text" id="meds" class="form-control" name="meds" placeholder="Unesite prepisanu terapipju"
                                          rows="" required></input>
                            </div>
                                                       
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Zapamti posetu
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection