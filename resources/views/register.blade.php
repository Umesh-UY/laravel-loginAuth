@extends('layouts.main')
@push('title')
    <title>Login-System | sign up</title>
@endpush
@section('main-section')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6" style="padding: 20px;background: rgba(255,255,255,.5);">
                <h1 class="text-center">Sign Up</h1>
                <form action="{{route('register-user')}}" method="post">

                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group my-3">
                        <label for="name">Enter Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="" value="{{old('name')}}">
                        <span class="text-danger">@error('name')
                            {{$message}}
                        @enderror</span>
                    </div>
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
                        <input type="password" class="form-control" name="password" id="password">
                        <span class="text-danger">@error('password')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
                <div>
                    <p>or</p>
                    <h6>if you have already an account? <a href="{{url('login')}}">Login here</a></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
