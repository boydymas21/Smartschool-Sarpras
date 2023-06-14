<?php

namespace App\Http\Controllers;

use App\Models\pengadaan;
use App\Models\kategori;
use App\Models\ruangan;
use App\Models\satuan;
use Illuminate\Http\Request;

class pengadaanController extends Controller
{
    public function index()
    {
        $data = pengadaan::orderBy('id', 'desc')->paginate(10);
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        return view('pengadaan.index', compact('satuan', 'kategori', 'ruangan'))->with('data', $data);
    }

    public function create()
    {
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        return view('pengadaan.create', compact('satuan', 'kategori','ruangan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'seri' =>'required|unique:input_barangs,seri',
            'nama' =>'required',
            'tgl_beli' =>'required',
            'satuan' =>'required',
            'kategori' =>'required',
            'jml_baik' =>'required',
            'jml_rusak' =>'required',
            'ruangan' =>'required',
            'imgs' =>'required',
        ],[
            'seri.required' => 'Nomor Seri barang wajib diisi',
            'seri.unique' => 'Nomor Seri sudah ada dalam database',
            'nama.required' => 'Nama barang wajib diisi',
            'tgl_beli.required' => 'Tanggal pembelian wajib diisi',
            'satuan.required' => 'Satuan barang wajib diisi',
            'kategori.required' => 'Kategori barang wajib diisi',
            'jml_baik.required' => 'Jumlah barang baik wajib diisi',
            'jml_rusak.required' => 'Jumlah barang rusak wajib diisi (0 jika tidak ada)',
            'ruangan.required' => 'Ruangan barang wajib diisi',
            'imgs.required' => 'Foto barang wajib diisi',
        ]);
        $data = [
            'seri' => $request->seri,
            'nama' => $request->nama,
            'tgl_beli' => $request->tgl_beli,
            'satuan' => $request->satuan,
            'kategori' => $request->kategori,
            'jml_baik' => $request->jml_baik,
            'jml_rusak' => $request->jml_rusak,
            'ruangan' => $request->ruangan,
            'imgs' => $request->imgs,
        ];
        pengadaan::create($data);
        return redirect()->to('pengadaan');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        $data = pengadaan::where('seri',$id)->first();
        return view('pengadaan.edit', compact('satuan', 'kategori','ruangan'))->with('data',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' =>'required',
            'tgl_beli' =>'required',
            'satuan' =>'required',
            'kategori' =>'required',
            'jml_baik' =>'required',
            'jml_rusak' =>'required',
            'ruangan' =>'required',
            'imgs' =>'required',
        ],[
            'nama.required' => 'Nama barang wajib diisi',
            'tgl_beli.required' => 'Tanggal pembelian wajib diisi',
            'satuan.required' => 'Satuan barang wajib diisi',
            'kategori.required' => 'Kategori barang wajib diisi',
            'jml_baik.required' => 'Jumlah barang baik wajib diisi',
            'jml_rusak.required' => 'Jumlah barang rusak wajib diisi (0 jika tidak ada)',
            'ruangan.required' => 'Ruangan barang wajib diisi',
            'imgs.required' => 'Foto barang wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'tgl_beli' => $request->tgl_beli,
            'satuan' => $request->satuan,
            'kategori' => $request->kategori,
            'jml_baik' => $request->jml_baik,
            'jml_rusak' => $request->jml_rusak,
            'ruangan' => $request->ruangan,
            'imgs' => $request->imgs,
        ];
        pengadaan::where('seri', $id)->update($data);
        return redirect()->to('pengadaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengadaan::where('seri', $id)->delete();
        return redirect()->to('pengadaan');
    }

    public function replicate($id)
    {
        $data = pengadaan::where('seri',$id)->first();
        $data->replicate()
             ->setTable('input_barangs')
             ->save();
             return redirect()->to('pengadaan');
    }
}
