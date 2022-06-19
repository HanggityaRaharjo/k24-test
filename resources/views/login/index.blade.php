@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
  <main class="form-signin">
    <h1 class="h3 mb-3 mt-5 fw-normal text-center">Login</h1>
  <form method="post" action="/login">
    @csrf
    <div class="form-floating">
      <input type="email" name="email"  class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Login</button>
  </form>
  <small class="d-block text-center mt-3">Not regitered? <a href="/register">register now!</a></small>
</main>
  </div>
</div>


@endsection