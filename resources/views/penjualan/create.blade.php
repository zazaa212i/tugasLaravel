@extends('layout.template')
<!-- START FORM -->
@section('toko')


<form action='{{ route('penjualan.store') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('penjualan') }}'class="btn btn-secondary"><< kembali</a>
        <div class="mb-3 row">
            <label for="Nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_barang' value="{{ Session::get('nama_barang') }}" id="nama_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Harga_Barang" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='harga_barang' value="{{ Session::get('harga_barang') }}" id="harga_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Jumlah_Barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='jumlah_barang' value="{{ Session::get('jumlah_barang') }}" id="jumlah_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama barang" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM --> 
    @endsection