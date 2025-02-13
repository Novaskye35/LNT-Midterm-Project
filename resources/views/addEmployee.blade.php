@extends('layout.app')

@section('content')
<br></br>
<div class="container shadow rounded p-3">
    <form action="{{route('employee.add')}}" method="POST">
        @csrf
        <h1>Add Employee Data</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Employee</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Someone you hired.</div>
        </div>
        @error('name')
            <p class='alert alert-danger'
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="age" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">08xxxxxxxxxx</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
