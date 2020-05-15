@extends('layouts.app')

@section('title', 'Les Stages')

@section('content')

@if (session('AddStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if (session('deleteStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ route('stage.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Ajouter Stage</a>
<h1>Liste des Stages</h1>
<div class="row">
    <div class="col">
    <ul class="list-group">
           @foreach ($stages as $stage)
            <a href="{{ route('stage.show', $stage->id) }}">
                <li class="list-group-item list-group-item-action">
                <strong>$stage->stage_type = $request->stage_type;</strong>
                <strong>$stage->stage_date_debut = $request->stage_date_debut;</strong>
                <strong>$stage->stage_date_fin = $request->stage_date_fin;</strong>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
