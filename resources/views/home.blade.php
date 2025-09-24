@extends('layout')
@section('title')
    ALL Users
@endsection
@section('heading')
    View ALL data here
@endsection
@section('content')
    <div class="d-flex justify-content-left align-items-left ">
        <button type="submit" class="btn btn-success btn-sm mb-2" onclick="location.href='{{ route('students.create') }}'">Add
            User</button>
    </div>
    <div class="row  border border-danger-subtle p-2 rounded-sm">

        <table class="table table-striped-columns">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->city }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm"
                            onclick="location.href='{{ route('students.show', $item->id) }}'">View</button>
                    </td>
                    <td>
                        <button class="btn btn-success btn-sm"
                            onclick="location.href='{{ route('students.edit', $item->id) }}'">Update</button>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
