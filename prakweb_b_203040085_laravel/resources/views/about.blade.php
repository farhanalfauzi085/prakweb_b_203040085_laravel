@extends('layouts.main')

@section('container')
<header>
  <div class="container text-center">
    <h1>About Me</h3>
    <hr>
    <br>
    <h5>{{ $name }}</h5>
    <p>{{ $email }}</p>
    <a href="https://www.instagram.com/farhanalfauziii/" class="btn btn-dark" target="_blank"><i class="fa fa-instagram"></i> My Instagram</a>
    <br><br>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
  </div>
</header>
@endsection