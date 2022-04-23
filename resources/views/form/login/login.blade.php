@extends('form.layouts.main')

@section('container')
<main class="form-signin">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    @if(session()->has('loginError'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="/login" method="post">
      @csrf
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
          </svg>
        <h1 class="h3 mb-3 fw-normal mt-2">{{ $title }}</h1>
  
        <div class="form-floating">
          <input type="email"name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" 
          placeholder="Email" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" 
        placeholder="Password" required>
        <label for="password">Password</label>
      </div>
  
     
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      
    </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy;Clara Adrianaa</p>
  </main>
  
@endsection