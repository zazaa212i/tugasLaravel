@extends('layout.template')
        <!-- START DATA -->
        @section('toko')
        
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('penjualan/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Nama</th>
                            <th class="col-md-4">Harga</th>
                            <th class="col-md-2">Jumlah</th>
                            <th class="col-md-2">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->harga_barang }}</td>
                            <td>{{ $item->jumlah_barang }}</td>
                            <td>
                                <a href="{{ url('penjualan/edit/'.$item->kode_barang ) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr> 
                        <?php $i++ ?> 
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $data->links() }}
          </div>
          <!-- AKHIR DATA -->
          @endsection
    