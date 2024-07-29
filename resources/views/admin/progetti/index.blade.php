@extends('layouts.app')

@section('content')
    @foreach ($projects as $project)
        {{ $project->nome }}

        @if ($project->completato > 0)
            Si
        @endif
        @if ($project->completato < 1)
            No
        @endif
    @endforeach
@endsection
