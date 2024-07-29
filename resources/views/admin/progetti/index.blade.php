@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12 row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-5 card">
                    <ul class="list-group">

                        <li class="list-group-item">Nome: {{ $project->nome }} </li>
                        <li class="list-group-item">Descrizione: {{ $project->descrizione }}</li>
                        <li class="list-group-item">Inizio: {{ $project->data_inizio }} </li>
                        <li class="list-group-item">Fine: {{ $project->data_fine }} </li>

                        <li class="list-group-item">
                            Completato: @if ($project->completato > 0)
                                Si
                            @endif
                            @if ($project->completato < 1)
                                No
                            @endif
                        </li>

                        <li class="list-group-item"><a href="{{ route('admin.admin.progetti.show', $project) }}"
                                class="btn btn-primary">Apri il
                                Progetto</a></li>
                    </ul>

                </div>
            @endforeach
        </div>
    </div>
@endsection
