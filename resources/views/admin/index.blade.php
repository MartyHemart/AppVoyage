@extends('admin.layouts.app')
@extends('layouts.app')

@section('index')

<p class="container">Bienvenue sur la gestion des voyages</p>

<div style="background-color: #08DAC1;padding-top: 30px;  padding-bottom: 30px;" class="container">
  <h3>Effectuer une recherche</h3>
  <form  action="{{route('search')}}" method="get">
    @csrf
    <input type="search" placeholder="Entrez un mot-clef" name="the_search">
    <button type="submit" name="button">Recherche</button>
  </form>
</div>

<table class="table container">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Voir</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($voyages as $voyage)
    <tr>
      <th scope="row">{{$voyage->id}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>{{$voyage->destination}}</td>
      <td><a href="{{route('admin.voyages.show', ['voyage'=>$voyage->id ])}}">Information</a> </td>
      <td>
        <form action="{{route('admin.voyages.edit', ['voyage'=>$voyage->id ])}}" method="get">
          @csrf

         <button type="sumbit" name="button">Modifier</button>
      </form>
      </td>

      <td>
        <form action="{{route('admin.voyages.destroy', ['voyage'=>$voyage->id])}}" method="post">
        @csrf
        @method("DELETE")
        <button type="sumbit" name="button">Supp</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
