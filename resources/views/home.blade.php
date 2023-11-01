@extends('layouts.app')



@section('content')

<h1>Fumetti Home</h1>
<a href="{{route('index')}}">Pagina per Amministratori</a>
@foreach($comics as $comic)
<p>{{$comic->title}}</p>
@endforeach
@endsection