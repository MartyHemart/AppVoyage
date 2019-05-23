@extends('admin.layouts.app')
@extends('layouts.app')

@section('search')

<h1 class="container">Résultat de votre recherche</h1>

@foreach($results as $result)
<div style="border-style: solid;" class="container">
  <center>
<p>Destination:  {{$result['destination']}}</p>
<p>Titre: {{$result['titre']}}</p>
<p>Prix: {{$result['prix']}}€</p>
<img src="{{$result['image']}}" alt="">
</center>
</div>




@endforeach
@endsection
