@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <img src="{{ url ('images/logo2.png') }}" class="rounded mx-auto d-block" width="500" alt=""><br>
        <b><p style="text-align: center;">Website ini menjual produk-produk diecast dengan berbagai merk terkenal, seperti hotwheels, minigt, maisto, dan masih banyak lagi.<br>
        Untuk kalian para pengunjung baru bisa melakukan register terlebih dahulu jika tidak punya akun.<br>
        Jika sudah ada akun maka login dan bisa melakukan transaksi.</p></b>
        </div>
       @foreach($barangs as $barang)
        <div class="col-md-3">
            <div class="card">
                <img src="{{ url ('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">
                        <strong>IDR {{ number_format($barang->harga)}}</strong><br>
                        <strong>Stok sisa {{ $barang->stok }} </strong><br>
                        <hr>
                        <strong>Deskripsi Produk</strong><br>
                        {{ $barang->keterangan }}
                    </p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection
