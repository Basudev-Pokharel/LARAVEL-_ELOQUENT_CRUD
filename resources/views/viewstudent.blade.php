@extends('layout')
@section('title', 'Get individual data ')
@section('heading', 'View specific data ')
@section('content')
    <div>
        <table class="table table-striped w-100">
            @foreach ($data->toArray() as $key => $value)
                <tr>
                    <th>
                        {{ $key }}
                    </th>
                    <td>
                        {{ $value }}
                    </td>
                </tr>
            @endforeach
        </table>
        <a class="btn btn-primary" href='{{ route('students.index') }}'>Go
            Back</a>
    </div>
@endsection
