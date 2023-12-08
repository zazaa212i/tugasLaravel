@extends('layout.template')
<!-- START FORM -->
@section('toko')


<form action='{{ route('penjualan/'.$data->nomor_barang) }}' method='post'>
@csrf
@method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ route('penjualan') }}'class="btn btn-secondary"><< kembali</a>
        <div class="mb-3 row">
            <label for="Nama_barang" class="col-sm-2 col-form-label" >Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_barang' value="{{ $data->nama_barang }}" id="nama_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Harga_Barang" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">   
                <input type="number" class="form-control" name='harga_barang' value="{{ $data->harga_barang }}" id="harga_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Jumlah_Barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='jumlah_barang' value="{{ $data->jumlah_barang }}" id="jumlah_barang">
            </div>
        </div>
        <div class="mb-3 row"> 
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">UPDATE</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM --> 
    @endsection