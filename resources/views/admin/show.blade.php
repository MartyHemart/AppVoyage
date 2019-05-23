@extends('admin.layouts.app')

@section('info_voyage')

<div class="container">


<h1>Information du voyage selectionner</h1>
 <p><b>Destination:</b> {{$voyage->first()->destination}}</p>
</div>
@endsection
