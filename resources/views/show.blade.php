@extends('layouts.appto')

@section('detail_voyage')
<div class="container">
 <h2>Information de votre voyage </h2>
 <img src="{{$voyage->first()->image}}" alt="">
 <p><b>Destination:</b> {{$voyage->first()->destination}}</p>
 <p><b>Description:</b> {{$voyage->first()->description}}</p>
 <p><b>Titre:</b> {{$voyage->first()->titre }} </p>
 <p><b>Prix:</b> {{$voyage->first()->prix}}€</p>
 <button type="button" name="button">Réserver</button> <br>
</div>
@endsection
