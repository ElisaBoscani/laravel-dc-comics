@extends('layouts.admin')


@section('content')
<h1>Modifica Fumetti</h1>
<div class="container">
  <form action="{{route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}" aria-describedby="helpId" placeholder="Titolo fumetto">
      <small id="nameHelper" class="form-text text-muted">Type the name here</small>
    </div>
    <!-- description -->
    <div>
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" name="description" id="description" value="{{$comic->description}}" aria-describedby="helpId" placeholder="Description">
      <small id="nameHelper" class="form-text text-muted">Type the Description here</small>
    </div>
    <!-- price -->
    <div>
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" name="price" id="price" value="{{$comic->price}}" aria-describedby="helpId" placeholder="Price es.12.60">
      <small id="nameHelper" class="form-text text-muted">Type the Description here</small>
    </div>
    <!-- serie -->
    <div>
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}" aria-describedby="helpId" placeholder="Series">
      <small id="nameHelper" class="form-text text-muted">Type the Series here</small>
    </div>
    <!-- data -->
    <div>
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" aria-describedby="helpId" placeholder="Sale Date es. 2023-04-21">
      <small id="nameHelper" class="form-text text-muted">Type the Sale Date here</small>
    </div>
    <!-- type -->
    <div>
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}" aria-describedby="helpId" placeholder="Type">
      <small id="nameHelper" class="form-text text-muted">Type the Type here</small>
    </div>
    <!-- artists -->
    <div>
      <label for="artists" class="form-label">Artists</label>
      <input type="text" class="form-control" name="artists" id="artists" value="{{$comic->artists}}" aria-describedby="helpId" placeholder="Artists">
      <small id="nameHelper" class="form-text text-muted">Type the Artists here</small>
    </div>
    <!-- writers -->
    <div>
      <label for="writers" class="form-label">Writers</label>
      <input type="text" class="form-control" name="writers" id="writers" value="{{$comic->writers}}" aria-describedby="helpId" placeholder="Writers">
      <small id="nameHelper" class="form-text text-muted">Type the Artists here</small>
    </div>
    <div class="mb-3">
      <img width="200" src="{{asset('storage/' . $comic->thumb)}}" alt="">
      <label for="thumb" class="form-label">Choose file</label>
      <input type="file" class="form-control" name="thumb" id="thumb" placeholder="" aria-describedby="cover_image_helper">
      <div id="cover_image_helper" class="form-text">Upload an image for the current product</div>
    </div>
    <button type="submit" class="btn btn-primary">
      Save
    </button>
  </form>
</div>
@endsection