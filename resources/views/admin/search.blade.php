@extends('admin.layouts.app')
@extends('layouts.app')

@section('search')

<h1>Résultat de votre recherche</h1>

@foreach($results as $result)

{{$result['destination']}}
{{$result['titre']}}



@endforeach
@endsection
