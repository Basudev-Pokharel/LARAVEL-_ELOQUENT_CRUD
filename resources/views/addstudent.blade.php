@extends('layout')
@section('title', 'Add Student here')
@section('heading', 'Add student here ')
@section('content')
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="age"
                value="{{ old('age') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">City</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="city"
                value="{{ old('city') }}">
        </div>
        <button type="submit" class="btn btn-primary">Insert</button>
        <a class="btn btn-secondary" href='{{ route('students.index') }}'>Go
            Back</a>
    </form>
@endsection
