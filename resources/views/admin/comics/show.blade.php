@extends('layouts.admin')


@section('content')
<div class="container">
  <h1>{{$comic->title}}</h1>
  <div>
    <img src="{{$comic->thumb}}" alt="">
    <img style="width: 150px;" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
  </div>
</div>
@endsection