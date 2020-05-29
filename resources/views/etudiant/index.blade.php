@extends('layouts.app')

@section('title', 'Etudiant')

@section('content')

@if (session('Addetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Addetudiant') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('deleteetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteetudiant') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ route('etudiant.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button"
    aria-pressed="true">Ajouter un étudiant !</a>
<h1>Liste des etudiants</h1>
<div class="row">
    <div class="col">
        <ul class="list-group">
        @foreach ($etudiants as $etudiant)
            <a href="{{ route('etudiant.show', $etudiant->id) }}">
                <li class="list-group-item list-group-item-action">
                    <strong>{{ $etudiant->cin }}</strong> 
                    <strong>{{ $etudiant->Nom }}</strong>
                    <strong>{{ $etudiant->Prenom }}</strong> 
                    <strong>{{ $etudiant->Adresse }}</strong>
                    <strong>{{ $etudiant->tel }}</strong> 
                    <strong>{{ $etudiant->email }}</strong>
                    <strong>{{ $etudiant->niveau }}</strong>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection