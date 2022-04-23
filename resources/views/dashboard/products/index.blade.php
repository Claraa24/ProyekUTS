@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Products</h1>

</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Tambah Produk Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga Produk</th>
          {{-- <th scope="col">photo</th> --}}
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
              <a href="{{ route('products.edit',$product->id) }}" class="badge bg-info"><span data-feather="edit"><</a>
              <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')"><span data-feather="x"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection
