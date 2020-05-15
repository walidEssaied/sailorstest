@extends('layouts.app')

@section('content')

@if (session('updateStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif








@admin
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Type </th>
        <th scope="col">Date debut</th>
        <th scope="col">date fin</th>

      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($stages as stage)
        <td> {{ $stage->stage_type}}</td>
        <td> {{ $stage->stage_date_debut}}</td>
        <td> {{ $stage->stage_date_fin}}</td>
            <a href="{{ route('stage.edit', $stage->id) }}" class="btn btn-outline-info">Editer Stage info</a>
            <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Supprimer</a>
      @endforeach
      </tr>
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer stage</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Etes-vous sûr de supprimer ce satge ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-stage-form').submit();">Confirmer Suppression</button>
        </div>
        <form id="delete-stage-form" action="{{ route('stage.destroy', $stage->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>



@elseadmnin
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Type </th>
        <th scope="col">Date debut</th>
        <th scope="col">date fin</th>
        <th scope="col">Type </th>
        <th scope="col">Adress</th>
        <th scope="col">Email</th>
        <th scope="col">Teléphone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <tr>
      @foreach($societes as societe)
        <td> {{ $societe->societe_nom}}</td>
        <td> {{ $societe->$stage->stage_type}}</td>
        <td> {{ $societe->$stage->stage_date_debut}}</td>
        <td> {{ $societe->$stage->stage_date_fin}}</td>
        <td> {{ $societe->societe_adresse}}</td>
        <td> {{ $societe->societe_email}}</td>
        <td> {{ $societe->societe_tel}}</td>
        <td>  
        </td>
        <a href="{{ route('stage.edit', $stage->id) }}" class="btn btn-outline-info">Demander cette offre</a>
        <!-- Onclick se faire l'enregistrment de l'etudiant id et societe id et une varriable etudiantHasStage par défault faux  -->
        <!-- Ces inforamtions seront affiché au l'admin -->
        <!-- Aprés l'admin evoyée les information aux les societes a travers le societe id -->
        <!-- Aprés les societes accepter ou refusé la demande de l'etudiant et change l'etat de varriable etudiantHasStage à vrai ou faux -->
        <!-- Ces inforamtions seront affiché au l'admin dans une nouveau table -->
        <!-- L'admin envoyée une fichier pdf (lettre de confirmation de stage) -->
        @endforeach
      </tr>

    </tbody>
  </table>
  @endadmin
@endsection