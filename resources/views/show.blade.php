@extends('layout')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>

  <div class="uper">
    <div class="card  mb-3" style="max-width: 150rem;">
        <div class="card-header">Detail Produk</div>
        <div class="card-body">
          <h5 class="card-title">Nama Produk : {{ $produks->nama_produk }}</h5>
          <p class="card-text">Keterangan : {{ $produks->keterangan }}</p>
          <p class="card-text">Harga : {{ $produks->harga }}</p>
          <p class="card-text">Jumlah : {{ $produks->jumlah }}</p>
        </div>
      </div>
  </div>
@endsection
