@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-4">
  <main class="form-register">
    <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
  <form action="/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-floating">
      <input type="text" name="name" method="post" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
      <label for="email">Email Address</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="tel" inputmode="numeric" name="phone" class="form-control" id="phone" placeholder="Phone Number">
      <label for="phone">Phone Number</label>
    </div>

    <div class="form-floating">
      <input type="date" name="date" class="form-control" id="date" placeholder="Date">
      <label for="date">Date</label>
    </div>

    <div class="form-floating">
      <input type="option" name="gender" class="form-control" id="gender" placeholder="male/female">
      <option value="male">male</option>
      <label for="gender">Gender</label>
    </div>

    <div class="form-floating">
      <input type="number" inputmode="numeric" name="ktp" class="form-control" id="number" placeholder="No.KTP">
      <label for="number">No.KTP</label>
    </div>


    <!-- <div class="form-floating">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
    </div> -->

    <div class="image-upload">
        <label for="image">Select Image Photo File <small><i>Maximum File 1 Mb</i></small></label>
        <input type="file" id="file" name="image" class="form-control">
    </div>

    <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Register</button>
 
    </form>
  <small class="d-block text-center mt-3">Already Registered? <a href="/admin">Log In now!</a></small>
</main>
  </div>
</div>


@endsection