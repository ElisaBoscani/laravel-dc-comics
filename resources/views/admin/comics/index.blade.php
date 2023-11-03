@extends('layouts.admin')



@section('content')

<h1>Comics List</h1>
<a class="btn btn-info" href="{{route('comics.create')}}">Add</a>

<div class="container">

  <table class="table">
    <thead>

      <tr>
        @foreach(array_keys($comics[0]->getAttributes()) as $comicTabName)
        <th class=" text-uppercase"> {{ str_replace('_', ' ', $comicTabName)}} </th>
        @endforeach
      </tr>

    </thead>
    <tbody>
      @foreach($comics as $comic)
      <tr>
        <td>
          {{$comic->id}}
        </td>
        <td>
          {{$comic->title}}
        </td>
        <td>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{ $comic->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$comic->id}}" aria-expanded="false" aria-controls="collapse{{$comic->id}}">
                  Read More
                </button>
              </h2>
              <div id="collapse{{$comic->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{ $comic->id }}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> {{$comic->description}}</div>
              </div>
            </div>
          </div>

        </td>
        <td>
          <img class="w-100" src="{{$comic->thumb}}" alt="">
          <img class="w-100" src="{{ asset('storage/' . $comic->thumb) }}" alt="">


        </td>
        <td>
          {{$comic->price}}
        </td>
        <td>
          {{$comic->series}}
        </td>
        <td>
          {{$comic->sale_date}}
        </td>
        <td>
          {{$comic->type}}
        </td>
        <td>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{ $comic->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$comic->id}}" aria-expanded="false" aria-controls="collapsev{{$comic->id}}">
                  Read More
                </button>
              </h2>
              <div id="collapse{{$comic->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{ $comic->id }}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> {{$comic->artists}}</div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{ $comic->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$comic->id}}" aria-expanded="false" aria-controls="collapse{{$comic->id}}">
                  Read More
                </button>
              </h2>
              <div id="collapse{{$comic->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{ $comic->id }}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> {{$comic->writers}}</div>
              </div>
            </div>
          </div>
        </td>
        <td>
          {{$comic->created_at}}
        </td>
        <td>
          {{$comic->updated_at}}
        </td>
        <td>
          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success">View</a>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-info">Edit</a>

          <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Confirm</button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection