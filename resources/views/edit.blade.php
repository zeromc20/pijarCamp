@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data Produk
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
      <form method="post" action="{{ route('produk.update', $produks->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Nama Produk:</label>
              <input type="text" class="form-control" name="nama_produk" value="{{ $produks->nama_produk }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan" value="{{ $produks->keterangan }}"/>
          </div>
          <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text " class="form-control" name="harga" value="{{$produks->harga}}">
          </div>
          <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text " class="form-control" name="jumlah" value="{{$produks->jumlah}}">
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
