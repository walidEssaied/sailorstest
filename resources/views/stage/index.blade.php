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

@auth
@admin
<a href="{{ route('stage.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Ajouter Stage</a>
<h1>Liste des Stages</h1>
<br>
<div class="row">
    <!-- <div class="col">
    <ul class="list-group">
           @foreach ($stages as $stage)
            <a href="{{ route('stage.show', $stage->id) }}">
                <li class="list-group-item list-group-item-action">
                <strong>{{$stage}}</strong>
                <strong>{{$stage->stage_type}}</strong>
                <strong>{{$stage->stage_date_debut}}</strong>
                <strong>{{$stage->stage_date_fin}}</strong> -->
                <!-- </li> -->
            <!-- </a> -->
            <!-- @endforeach -->
        <!-- </ul> -->
    <!-- </div> --> 
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Edit page</th>
        <th scope="col">Type de stage </th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($stages as $stage)


      <tr>
                <td><a href="{{ route('stage.show', $stage->id) }}" class="btn btn-outline-info">Edit page</a></td>
                <td> {{ $stage->type}}</td>
                <td> {{ $stage->date_debut}}</td>
                <td> {{ $stage->date_fin}}</td>
                <td>
                    <a href="{{ route('stage.edit', $stage->id) }}" class="btn btn-outline-info">Edit</a>
                    <a href="{{ route('stage.destroy', $stage->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
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

</div>
@elseadmin
@endadmin




<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Offres des stages</h1>
      <p class="lead text-muted">Vous pouvez maintenant trouver facilement votre stage</p>
      <p>
      <a href="" class="btn btn-primary my-2">Stage d'initiation</a>
      <a href="" class="btn btn-primary my-2">Stage d'initiation</a>
      <a href="" class="btn btn-primary my-2">Stage PFE</a>
      </p>
      <p>
      <!-- <form class="form-inline my-2 my-lg-0" style="margin-left: 400px;"> -->
            <input class="form-control" id="myInputetud" type="text" placeholder="Rechercher par nom , date , type , adress ..">
            <!-- <button class="  my-2 my-sm-0" type="submit" style="border-radius: 10%"><img src="https://p7.hiclipart.com/preview/928/549/87/magnifying-glass-computer-icons-magnification-loupe.jpg" alt="serch logo" style="width: 30px;height: 30px;"></button> -->
        <!-- </form> -->
      </p>
    </div>
  </section>
  <!-- <div class="container">
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div> -->

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Afficher l'offre</th>
        <th scope="col">Nom de societe</th>
        <th scope="col">Adress de societe</th>
        <th scope="col">Type de stage</th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTableetud">


      <tr>
                <td><a href="" class="btn btn-outline-succes">Afficher</a></td>
                <td> Nachdit</td>
                <td> Sousse-tafela</td>
                <td> Sousse d'initiation</td>
                <td> 2020-04-10</td>
                <td> 2020-05-10</td>
                <td>
                    <a href="" class="btn btn-outline-info">Demander</a>
                </td>


      </tr>
      <tr>
                <td><a href="" class="btn btn-outline-succes">Afficher</a></td>
                <td> Nachdit2</td>
                <td> Sousse-tafela222</td>
                <td> Sousse d'initiation222é</td>
                <td> 2020-04-10 22222</td>
                <td> 2020-05-10222</td>
                <td>
                    <a href="" class="btn btn-outline-info">Demander</a>
                </td>


      </tr>

    </tbody>
  </table>
  <script>
$(document).ready(function(){
  $("#myInputetud").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableetud tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</main>
@endauth
@endsection
