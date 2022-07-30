@extends('layouts.main')
@push('title')
    <title>Login-System | dashboard</title>
@endpush
@section('main-section')
    <div class="container my-4">
        <h2 class="text-center">
            Hello ! {{ session()->get('user') }}
        </h2>

        <div class="card">
            <h5 class="card-header">Logout</h5>
            <div class="card-body">
                <p class="card-text">logout by clicking on below button </p>
                <a href="{{ route('logout') }}" class="btn btn-primary">logout</a>
            </div>
        </div>
    </div>
@endsection
