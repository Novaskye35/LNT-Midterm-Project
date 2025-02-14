@extends('layout.app')

@section('content')
<br></br>
<div class="container shadow rounded p-3">
    <form action="{{route('employee.update')}}" method="POST">
        @method('patch')
        @csrf
        <h1>Update Employee Data</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Employee</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Someone you hired.</div>
        </div>
        @error('name')
            <p class='alert alert-danger'>{{$message}}</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="age" value="{{old('age')}}" aria-describedby="emailHelp">
        </div>
        @error('age')
            <p class='alert alert-danger'>{{$message}}</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{old('address')}}" aria-describedby="emailHelp">
        </div>
        @error('address')
            <p class='alert alert-danger'>{{$message}}</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="phone" value="{{old('phone')}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">08xxxxxxxxxx</div>
        </div>
        @error('phone')
            <p class='alert alert-danger'>{{$message}}</p>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
