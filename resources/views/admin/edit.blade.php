@extends('admin.layouts.app')

@section('update_voyage')

<div class="container">
<h1>Modifier votre voyage</h1>
<form  action="{{route('admin.voyages.update', ['voyage'=>$voyage->id])}}" method="post">
  @csrf
  @method('PUT')
   Destination
   <input type="text" name="destination" value="{{$voyage->destination}}"> <br>
   Description
   <input type="text" name="description" value="{{$voyage->description}}"> <br>
   prix
   <input type="text" name="prix" value="{{$voyage->prix}}"> <br>
   Image
   <input type="text" name="image" value="{{$voyage->image}}"> <br>
   Titre
   <input type="text" name="titre" value="{{$voyage->titre}}"> <br>
   <button type="submit" name="button">Modifier</button>
</form>
</div>
@endsection
