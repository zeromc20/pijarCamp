<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
  Tambah Produk
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('produk.store') }}">
          <div class="form-group">
              @csrf
              <label for="nama_produk">Nama Produk:</label>
              <input type="text" class="form-control" name="nama_produk"/>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan"/>
          </div>
          <div class="form-group">
              <label for="harga">Harga :</label>
              <input type="text" class="form-control" name="harga"/>
          </div>
          <div class="form-group">
              <label for="jumlah">Jumlah :</label>
              <input type="text" class="form-control" name="jumlah"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Produk</button>
      </form>
  </div>
</div>
@endsection
