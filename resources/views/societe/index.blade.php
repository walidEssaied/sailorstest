@extends('layouts.app')

@section('title', 'ISETB - Les Societes')

@section('content')

@if (session('AddSociete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddSociete') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('deleteSociete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteSociete') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ route('societe.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Ajouter Societe</a>
<h1>Liste des Sociétes</h1>
<br>
<div class="row">
    <!-- <div class="col">
    <ul class="list-group">
           @foreach ($societes as $societe)
            <a href="{{ route('societe.show', $societe->id) }}">
                <li class="list-group-item list-group-item-action">
                    <strong>{{$societe}}</strong> 
                     <strong>{{$societe->societe_nom}}</strong> 
                    <strong>{{ $societe->societe_adresse }}</strong>
                    <strong>{{ $societe->societe_email}}</strong>
                    <strong>{{ $societe->societe_tel }}</strong> -->
                <!-- </li> -->
            <!-- </a> -->
            <!-- @endforeach -->
        <!-- </ul> -->
    <!-- </div>  -->
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Edit page</th>
        <th scope="col">Id Societe</th>
        <th scope="col">Nom </th>
        <th scope="col">Email</th>
        <th scope="col">Teléphone</th>
        <th scope="col">Opérations</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($societes as $societe)

      <tr>
                <td><a href="{{ route('societe.show', $societe->id) }}" class="btn btn-outline-info">Edit page</a></td>
                <td> {{ $societe->id}}</td>
                <td> {{ $societe->nom}}</td>
                <td> {{ $societe->adresse}}</td>
                <td> {{ $societe->email}}</td>
                <td> {{ $societe->tel}}</td>
                <td>
            <a href="{{ route('societe.edit', $societe->id) }}" class="btn btn-outline-info">Edit</a>
            <a href="{{ route('societe.destroy', $societe->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
    <!-- Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer Societe</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Etes-vous sûr de supprimer cette societé ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-societe-form').submit();">Confirmer Suppression</button>
        </div>
        <form id="delete-societe-form" action="{{ route('societe.destroy', $societe->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
