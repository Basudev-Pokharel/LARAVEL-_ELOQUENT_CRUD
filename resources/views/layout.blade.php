<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container d-flex p-2 flex-column justify-content-center align-items-center">
        <h1>Here gonna be crud From Eloquent</h1>
        <h2 class="bg-primary text-light p-2">@yield('heading')</h2>
        <div class="d-flex justify-content-left align-items-left ">
            <button type="submit" class="btn btn-success btn-sm mb-2"
                onclick="location.href='{{ route('students.create') }}'">Add User</button>
        </div>
        <div class="row  border border-danger-subtle p-2 rounded-sm">
            @yield('content')
        </div>
    </div>
</body>

</html>
