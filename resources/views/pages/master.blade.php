<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title','Student Management')
    </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

{{-- navbar start --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('create')}}">Create</a>
            </li>
          </ul>


          <ul class="navbar-nav ml-auto mr-auto">
            @if(Auth::check())

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Dashboard <span class="sr-only">(current)</span></a>
                  </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('register')}}">Register <span class="sr-only">(current)</span></a>
                  </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">Login</a>
                  </li>
            @endif


          </ul>

        </div>
    </div>
      </nav>
{{-- navbar end --}}


<div class="container">

    @yield('content')

</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
