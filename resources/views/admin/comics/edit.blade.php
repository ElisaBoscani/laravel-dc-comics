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