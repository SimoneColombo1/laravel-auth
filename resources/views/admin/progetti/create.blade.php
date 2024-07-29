@extends('layouts.app')



@section('content')
    <div class="col-8">
        <form action="{{ route('admin.progetti.store') }}" method="POST">
            @method('POST')
            @csrf

            <label for="Nome"> Nome</label>

            <input type="text" id="nome" name="nome" class="form-control form-control-sm mb-3 mt-3">

            <label for="Specie"> descrizione</label>
            <input type="text" id="descrizione" name="descrizione" class="form-control form-control-sm mb-3 mt-3">



            <label for="DataArrivo"> data fine</label>
            <input type="date" id="data_fine" name="data_fine" class="form-control form-control-sm mb-3 mt-3">
            <input type="radio" id="1" name="completato" value="1">
            <input type="radio" id="0" name="completato" value="0">
            <input type="submit">


        </form>

    </div>

    </div>
@endsection
