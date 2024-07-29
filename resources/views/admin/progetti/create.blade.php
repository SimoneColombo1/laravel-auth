@extends('layouts.app')



@section('content')
    <div class="col-8">
        <form action="{{ route('admin.progetti.store') }}" method="POST">



            <label for="Nome"> Nome</label>

            <input type="text" id="nome" name="nome" class="form-control form-control-sm mb-3 mt-3">

            <label for="Specie"> descrizione</label>
            <input type="text" id="descrizione" name="descrizione" class="form-control form-control-sm mb-3 mt-3">

            <label for="Eta"> data inizio</label>
            <input type="date" id="data_inizio" name="data_inizio" class="form-control form-control-sm mb-3 mt-3">

            <label for="DataArrivo"> data fine</label>
            <input type="date" id="data_fine" name="data_fine" class="form-control form-control-sm mb-3 mt-3">
            <input type="radio" id="1" name="completato">
            <input type="radio" id="0" name="completato">
            <input type="submit">


        </form>

    </div>

    </div>
@endsection
