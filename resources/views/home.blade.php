@extends('layouts.main')
@section('content')
<div class="container">
<ul>
    @foreach($trains as $train)
    <li>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title">TRENO n°{{$train->id}}</h1>
    <h3 class="card-subtitle mb-2 text-muted">azienda:{{$train->azienda}}</h3>
    <h3 class="card-subtitle mb-2 text-muted">Stazione di partenza:{{$train->stazione_di_partenza}}</h3>
    <h3 class="card-subtitle mb-2 text-muted">Stazione di arrivo:{{$train->stazione_di_arrivo}}</h3>
    <h3 class="card-subtitle mb-2 text-muted">Orario di partenza:{{$train->orario_di_partenza}}</h3>
    <h3 class="card-subtitle mb-2 text-muted">Orario di arrivo:{{$train->orario_di_arrivo}}</h3>
    <h3 class="card-subtitle mb-2 text-muted">Codice treno:{{$train->codice_treno}}</h3>
   
    
  </div>
</div>
    </li>
    @endforeach
</ul>

</div>

@endsection