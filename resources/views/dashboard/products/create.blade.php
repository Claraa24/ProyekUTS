@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah produkk</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/products" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
          <label for="" class="mb-2">Nama Produk</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="name" 
          required autofocus value="{{ old('name') }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        
        <div class="form-group mb-3">
          <label for="price" class="mb-2">Harga</label>
          <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">   
        </div>
        <div class="mb-3">
          <label for="img" class="form-label mb-2">Gambar produkk</label>
          <img class="img-preview img-fluid mb-3 col-sm-3">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewimage()">
          @error('image')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror  
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection