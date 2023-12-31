@extends('layout')
@section('title', 'Registration')
@section('content')

<div class="container mt-5">
  <div class="" mt-5>
    @if($errors->any())
    <div class="col-12">
      @foreach($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="rounded p-4 " style="background: linear-gradient(#cdb4db, #ffc8dd,#ffafcc ); border-radius: 10px;">

        <form action="{{route('registration.post')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label text-white">Name</label>
            <input type="name" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary border-0" style="background-color: #a2d2ff;">Register</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection