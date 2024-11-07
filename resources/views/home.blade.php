@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-4">
            <h1 class="text-light">Benvenuto nel Portfolio</h1>
            <p class="text-light">Qui puoi visualizzare i progetti e le statistiche. Iscriviti per portare il tutto ad un livello superiore!</p>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 bg-dark text-light">
                <div class="card-header">Progetti Recenti</div>
                <div class="card-body">
                    @if($projects->isEmpty())
                        <p>Non ci sono progetti recenti.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($projects as $project)
                                <li class="list-group-item bg-secondary text-light">
                                    <h5>{{ $project->title }}</h5>
                                    <p>{{ $project->description }}</p>
                                    <a href="{{ $project->url }}" target="_blank" class="btn btn-primary">Vai al Progetto</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 bg-dark text-light">
                <div class="card-header">Statistiche</div>
                <div class="card-body">
                    <p>Numero Totale di Progetti: {{ $projects->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
