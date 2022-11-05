@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
      <p class="mt-5 mb-3 text-muted text-center">&copy; F Blog | 2022</p>
    </main>
  </div>
</div>

@endsection