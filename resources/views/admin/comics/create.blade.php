@extends('layouts.admin')


@section('content')
<h1>Aggiungi Fumetti</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="container">
  <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name=" title" id="title" aria-describedby="helpId" placeholder="Title" value="{{old('title')}}">
      <small id="nameHelper" class="form-text text-muted">Type the name here</small>
      @error('title')
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #ff0f0f;"></i>
        <span>
          Name, Error: {{$message}}
        </span>
      </div>
      @enderror
    </div>
    <!-- description -->
    <div>
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="helpId" placeholder="Description" value="{{old('description')}}">
      <small id="nameHelper" class="form-text text-muted">Type the Description here</small>
      @error('description')
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #ff0f0f;"></i>
        <span>
          Name, Error: {{$message}}
        </span>
      </div>
      @enderror
    </div>
    <!-- price -->
    <div>
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Price es.12.60">
      <small id="nameHelper" class="form-text text-muted">Type the Price here</small>
    </div>
    <!-- series -->
    <div>
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="Series">
      <small id="nameHelper" class="form-text text-muted">Type the Series here</small>
    </div>
    <!-- data -->
    <div>
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Sale Date es. 2023-04-21">
      <small id="nameHelper" class="form-text text-muted">Type the Sale Date here</small>
    </div>
    <!-- type -->
    <div>
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Type">
      <small id="nameHelper" class="form-text text-muted">Type the Type here</small>
    </div>
    <!-- artists -->
    <div>
      <label for="artists" class="form-label">Artists</label>
      <input type="text" class="form-control" name="artists" id="artists" aria-describedby="helpId" placeholder="Artists">
      <small id="nameHelper" class="form-text text-muted">Type the Artists here</small>
    </div>
    <!-- writers -->
    <div>
      <label for="writers" class="form-label">Writers</label>
      <input type="text" class="form-control" name="writers" id="writers" aria-describedby="helpId" placeholder="Writers">
      <small id="nameHelper" class="form-text text-muted">Type the Writers here</small>
    </div>
    <div class="mb-3">
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