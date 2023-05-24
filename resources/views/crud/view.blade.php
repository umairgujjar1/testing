<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .w-5 {
            width: 30px !important;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/register') }}">Rigester Now <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view') }}">VIEW DB</a>
                </li>

            </ul>
        </div>
    </nav>
    {{-- <pre>
    {{print_r($student)}}
    </pre> --}}
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="col-2">Name</th>
                    <th>Father Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{ $data->name }}</td>
                        <td> {{ $data->fathername }}</td>
                        <td> {{ $data->phone }}</td>
                        <td>
                            <a href="{{ url('/view/delete') }}/{{ $data->id }}"> <button
                                    class="btn btn-danger">Delete</button></a>
                            <a href="{{'/view/edit'}}/{{$data->id}}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $student->links() }}


    </div>
    <a href="{{ route('register') }}">

        <button type="button" class="btn btn-primary btn-lg " style="display: block;margin:auto;">ADD DATA</button>
    </a>



</body>

</html>
