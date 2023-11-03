@extends('layouts.admin')


@section('content')
<div class="container">
  <h1>{{$comic->title}}</h1>
  <div class="d-flex">
    <div>
      @if (str_contains($comic->thumb, 'http'))
      <img style="width: 250px;" src="{{$comic->thumb}}" alt="">
      @else
      <img style="width: 250px;" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
      @endif
    </div>
    <div>
      <ul class="list-unstyled ">
        <li><span class="fw-bold ">Price:</span> {{$comic->price}}</li>
        <li> <span class="fw-bold ">Series:</span> {{$comic->series}} </li>
        <li><span class="fw-bold ">Date: </span> {{$comic->sale_date}} </li>
        <li><span class="fw-bold ">Type:</span> {{$comic->type}} </li>
        <li> <span class="fw-bold ">Artists:</span> {{$comic->artists}}</li>
        <li><span class=" fw-bold ">Writers:</span> {{$comic->writers}}</li>
        <li><span class=" fw-bold ">Description:</span> {{$comic->description}}</li>
      </ul>







    </div>
  </div>
</div>
@endsection