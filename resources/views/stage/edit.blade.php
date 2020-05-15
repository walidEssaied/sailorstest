@extends ('layouts.app')

@section ('title','Edit Society')

@section ('content')
<fieldset>
<legend> Modifier cette stage</legend>
<form action="{{ route('stage.update' , $stage->id)}}" method="post">
@csrf
@method('PATCH') 
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="stage_type">Type</label>
         <input type="text" name="stage_type" value="{{ old('stage_type') ?? $stage->stage_type }}" id="stage_type" class="form-control" placeholder="">
         @error('stage_type')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="stage_date_debut">Date debut</label>
         <input type="text" name="stage_date_debut" value="{{ old('stage_date_debut') ?? $stage->stage_date_debut }}" id="stage_date_debut" class="form-control" placeholder="">
         @error('stage_date_debut')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="stage_date_fin">Date fin</label>
         <input type="text" name="stage_date_fin" value="{{ old('stage_date_fin') ?? $stage->stage_date_fin }}" id="stage_date_fin" class="form-control" placeholder="">
         @error('stage_date_fin')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


    <div class="row">
    <button type ="submit" class="btn btn-outline-primary btn-block">Confirmer la Modification</button>
    </div>
</div>
</form>
</fieldset>
@endsection