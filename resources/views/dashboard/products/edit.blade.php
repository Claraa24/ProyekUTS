@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit product</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/products/{{ $product->id }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="">Nama product</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="name" required autofocus
          value="{{ old('name',$product->name)  }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        
        <div class="form-group mb-3">
          <label for="price">Harga</label>
          <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price',$product->price) }}">   
        </div>
        <div class="mb-3">
          <label for="img" class="form-label mb-2 d-block">Gambar Menu</label>
          @if ($product->image)
          
          <img src="{{ asset('image/') . $product->image }}" alt="">

          @else
          
          <img class="img-preview img-fluid mb-3 col-sm-3">
          
          @endif
          <input class="form-control" type="file" id="image" name="image" onchange="previewimage()">
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
      </form>
</div>
@endsection