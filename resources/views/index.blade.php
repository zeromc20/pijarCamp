<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
    <div class="float-right">
            <a href="{{ route('produk.create') }}"><button class="btn btn-success">tambah</button></a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama Produk</td>
          <td>Keterangan</td>
          <td>Harga</td>
          <td>Jumlah</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $produk)
        <tr>
            <td>{{$produk->id}}</td>
            <td>{{$produk->nama_produk}}</td>
            <td>{{$produk->keterangan}}</td>
            <td>{{$produk->harga}}</td>
            <td>{{$produk->jumlah}}</td>
            <td><a href="{{ route('produk.edit', $produk->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('produk.destroy', $produk->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
