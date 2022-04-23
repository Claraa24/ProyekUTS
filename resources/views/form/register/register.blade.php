@extends('form.layouts.main')

@section('container')
<main class="form-signin">
    <form action="/register" method="post">
      @csrf
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
          </svg>
        <h1 class="h3 mb-3 fw-normal mt-2">{{ $title }}</h1>

       <div class="form-floating">
        <input type="name" name="name"class="form-control rounded-top @error('name') is-invalid @enderror" id="name" 
        placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="username" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" 
          placeholder="Username" required value="{{ old('username') }}">
        <label for="username">Username </label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email"name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" 
        placeholder="Email" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" id="password"
         placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small class="d-block text-center mt-3">Already Registered?<a href="/login"> Click Login!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy;Clara Adrianaa</p>
  </main>
  
@endsection