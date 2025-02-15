@extends('layout.app')

@section('content')

@forelse ($employee as $e)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$e->name}}</h5>
      <p class="card-text">{{$e->age}}</p>
      <p class="card-text">{{$e->address}}</p>
      <p class="card-text">{{$e->phone}}</p>

      <a href="/updateEmplyee/{{$e->id}}" class="btn btn-primary">Edit</a>
        <form action="/delete/{{$e->id}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Deletee</button>
        </form>
    </div>
  </div>
@empty

 <p class="alert alert-warning">No Employee data is detected</p>
@endforelse


@endsection
