@extends('layouts.main')
@push('title')
    <title>Login-System | login </title>
@endpush
@section('main-section')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6" style="padding: 20px;background: rgba(255,255,255,.5);">
                <h1 class="text-center">Login Here</h1>
                <form action="{{ route('login-user') }}" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="mb-3 my-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="emailHelp" value="{{old('email')}}">
                            <span class="text-danger">@error('email')
                                {{$message}}
                            @enderror</span>
                    </div>
                    <div class="mb-3 my-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
                <div>
                    <p>or</p>
                    <h6>if you are new user? <a href="{{ url('register') }}">Sign up</a></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
