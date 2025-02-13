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

      <a href="#" class="btn btn-primary">Edit</a>
      <a href="#" class="btn btn-primary">Delete</a>
    </div>
  </div>
@empty

 <p class="alert alert-warning">No Employee data is detected</p>
@endforelse


@endsection
