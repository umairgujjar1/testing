<!doctype html>
<html lang="en">

<head>
    <title>form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a class="nav-link" href="{{ url('/register/view') }}">VIEW DB</a>
                </li>

            </ul>
        </div>
    </nav>
    <form action="{{ URL::to($url) }}" method="post">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
        </pre> --}}
        <div class="container">
            <h1 class="text-center text-primary">{{ $tittle }}</h1>

            <div class="form-group">
                <label for="">name</label>
                <input type="text" name="name" value="{{ $student->name ?? old('name') }} " id=""
                    class="form-control" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
            </div>

            <div class="form-group">
                <label for="">father name</label>
                <input type="text" name="fname" id="" value="{{ $student->fathername ?? old('fname') }}"
                    class="form-control" placeholder="" aria-describedby="helpId">
                <span class="text-success">
                    @error('fname')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Phone No</label>
                <input type="text" name="phone" value="{{ $student->phone ?? old('phone') }}" id=""
                    class="form-control" placeholder="" aria-describedby="helpId">
                <span class="text-success">
                    @error('phone')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">password</label>
                <input type="password" name="password" id=""
                    value="{{ $student->password ?? old('password') }}" class="form-control" placeholder=""
                    aria-describedby="helpId">
                <span class="text-primary">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
