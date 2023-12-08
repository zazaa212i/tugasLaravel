<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = penjualan::orderBy('nama_barang', 'desc')->paginate(3);
        return view('penjualan/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('harga_barang',$request->harga_barang);
        Session::flash('jumlah_barang',$request->jumlah_barang);
        Session::flash('nama_barang',$request->nama_barang);

        $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'jumlah_barang' => 'required|numeric|min:1',
        ],[
            'nama_barang.required'=>'Nama barang diisi dulu ya',
            'harga_barang.required'=>'Harga barang diisi dulu ya',
            'jumlah_barang.required'=>'Jumlah barang diisi dulu ya',
            'jumlah_barang.numeric'=>'Jumlah harus berupa angka',
            'harga_barang.numeric'=>'Harga harus berupa angka',
        ]);
    
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'harga_barang' => $request->input('harga_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        ];
    
        penjualan::create($data);
        return redirect('/penjualan')->with('success' ,'Berhasil menyimpan data');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data = penjualan::where('kode_barang', $id)->first();
        return view('penjualan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah_barang' => 'required|numeric|min:1',
        ],[
            'nama_barang.required'=>'Nama barang diisi dulu ya',
            'jumlah_barang.required'=>'Jumlah barang diisi dulu ya',
            'jumlah_barang.numeric'=>'Jumlah harus berupa angka',
        ]);
    
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        ];
    
        penjualan::where('harga_barang',$id)->update($data);
        return redirect('penjualan.index')->with('success' ,'Berhasil melakukan update data');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
