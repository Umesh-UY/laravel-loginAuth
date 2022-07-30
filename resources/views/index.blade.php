@extends("layouts.main")
@push('title')
    <title>Login-System</title>
@endpush
@section('main-section')
{{-- slider start  --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slider1.jpg" class="d-block w-100" style="height: 400px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider2.jpg" class="d-block w-100" style="height: 400px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider3.jpg" class="d-block w-100" style="height: 400px;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- slider end  --}}
<div class="container">
    <div class="row">
        <div class="col-sm-6 p-5">
            <h1>What is coding?</h1>
            <p>Coding, sometimes called computer programming, is how we communicate with computers. Code tells a computer what actions to take, and writing code is like creating a set of instructions. By learning to write code, you can tell computers what to do or how to behave in a much faster way. You can use this skill to make websites and apps, process data, and do lots of other cool things.</p>
        </div>
        <div class="col-sm-6 p-5">
            <h1>Why learn how to code?</h1>
            <p>We all have hopes, dreams, and plans for the future. Whether you’re looking for a new opportunity, want to optimize your current job, or are simply searching for a new hobby, coding can help you get closer to your goals. And remember, anyone can learn how to code!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 p-5">
            <h1>Learn skills that will open doors</h1>
            <p>Computer and information technology jobs are growing incredibly fast in the United States and across the globe. You don't need a Computer Science degree; there are more and more high-paying jobs emerging every day for newer learners like you.</p>
        </div>
        <div class="col-sm-4 p-5">
            <img src="assets/img/Coding_OpenDoors.svg" alt="">
        </div>
    </div>
</div>
<div class="container" id="register">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
          Hello, world! This is a toast message.
          <div class="mt-2 pt-2 border-top">
            <button type="button" class="btn btn-primary btn-sm">Take action</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
          </div>
        </div>
      </div>
</div>
@endsection
