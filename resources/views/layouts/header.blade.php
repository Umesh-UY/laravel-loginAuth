<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @stack('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href={{url('/')}}>Elpha Coding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(!session()->has('user'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}"><i class="fa fa-sign-up" aria-hidden="true">Login</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}"><i class="fa fa-sign-in" aria-hidden="true">sign up</i></a>
                        </li>
                        @else
                        <li class="nav-item">
                            <p class="nav-link">wellcome ! {{session()->get('user')}}</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
