@extends('layout')
@section('title', 'Login')
@section('content')
  <div class="container mt-5">
  <div class="row justify-content-center">
  <div class="col-md-4">
      <div class="rounded p-4 " style="background: linear-gradient(#cdb4db, #ffc8dd,#ffafcc ); border-radius: 10px;">
        <form action="{{route('login.post')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label text-white">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Password</label>
            <input type="password" class="form-control" name="password" >
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" >
            <label class="form-check-label text-white font-weight-bold" >Remember me</label>
          </div>
        </form>
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary border-0" style="background-color: #a2d2ff;">Login</button>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection