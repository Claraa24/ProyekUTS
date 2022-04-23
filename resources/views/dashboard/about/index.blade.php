@extends('dashboard.layouts.main')

@section('container')

    
<div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">About</h1>
  {{-- <a href="{{ route('about.update',$about->id) }}" class="badge bg-warning ms-3"><span data-feather="edit"></span></a> --}}
</div>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
<div class="col-lg-8">
  <form method="post" action="/dashboard/about/{{ $about->id }}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    
    <div class="form-group">
      <label for="">Deskripsi</label>
      
      <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="namaMakanan" name="desc" required autofocus
      value="{{ old('desc',$about->desc)  }}">
      @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror   
    </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection