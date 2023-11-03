@extends('layouts.admin')



@section('content')

<h1 class="text-center">Comics List</h1>


@if(session('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <i class="fa-solid fa-circle-check fa-2xl" style="color: #29ff37;"></i>{{session('message')}}
</div>

@endif

<div class="container">

  <table class="table">
    <thead>

      <tr>
        @foreach(array_keys($comics[0]->getAttributes()) as $comicTabName)
        <th class=" text-uppercase text-center"> {{ str_replace('_', ' ', $comicTabName)}} </th>
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

          @if (str_contains($comic->thumb, 'http'))
          <img class="w-100" src="{{$comic->thumb}}" alt="">

          @else
          <img class="w-100" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
          @endif


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

          <!--    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Confirm</button>
          </form> -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
            Elimina
          </button>

          <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle-{{$comic->id}}">Confirm Deletion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa-solid fa-x" style="color: #000000;"></i></span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to delete it?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection