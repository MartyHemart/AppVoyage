@extends('admin.layouts.app')

@section('create_voyage')

<div class="container">
<h1>Créer votre voyage</h1>
<form  action="{{ route('admin.voyages.store')}}" method="post">
   @csrf

   @if ($errors->has('destination'))
   {{ $errors->first('destination')}}
   @endif

   Destination
   <input type="text" name="destination" value="{{old('label')}}"> <br>
   Description
   <input type="text" name="description" value="{{old('label')}}"> <br>
   prix
   <input type="text" name="prix" value="{{old('label')}}"> <br>
   Image
   <input type="text" name="image" value="{{old('label')}}"> <br>
   Titre
   <input type="text" name="titre" value="{{old('label')}}"> <br>
   <button type="submit" name="button">Rajoutez</button>
</form>
</div>
@endsection
