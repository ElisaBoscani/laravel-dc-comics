@extends('layouts.app')



@section('content')

<h1 class="text-center">Comics</h1>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
    @foreach ($comics as $comic)
    <div class="col h-100 pt-5">
      <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="">
      <div>
        <img class="w-100" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
        <div>
          <span class="fw-bold">{{$comic->title}}</span>
          <span class="fw-bold">{{$comic->price}}</span>
        </div>
      </div>

    </div>
    @endforeach
  </div>
</div>
@endsection