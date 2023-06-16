<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input_barang;
use App\Models\satuan;
use App\Models\kategori;
use App\Models\ruangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = input_barang::orderBy('id', 'desc')->get();
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        return view('barang.index', compact('satuan', 'kategori', 'ruangan'))->with('data', $data);
    }

    public function laporan()
    {   
        $data = input_barang::orderBy('id', 'desc')->get();
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        return view('barang.laporan', compact('satuan', 'kategori', 'ruangan'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        return view('barang.create', compact('satuan', 'kategori','ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        input_barang::create($data);
        return redirect()->to('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

     public function detail($id)
    {
        $data = DB::table('input_barangs')->where('id', $id)->first();
        return view('barang.detail', ['data'=>$data]);
    }

    public function edit($id)
    {
        $satuan = satuan::all();
        $kategori = kategori::all();
        $ruangan = ruangan::all();
        $data = input_barang::where('seri',$id)->first();
        return view('barang.edit', compact('satuan', 'kategori','ruangan'))->with('data',$data);
        
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
            
        ],[
            'nama.required' => 'Nama barang wajib diisi',
            'tgl_beli.required' => 'Tanggal pembelian wajib diisi',
            'satuan.required' => 'Satuan barang wajib diisi',
            'kategori.required' => 'Kategori barang wajib diisi',
            'jml_baik.required' => 'Jumlah barang baik wajib diisi',
            'jml_rusak.required' => 'Jumlah barang rusak wajib diisi (0 jika tidak ada)',
            'ruangan.required' => 'Ruangan barang wajib diisi',
            
        ]);
        $data = [
            'nama' => $request->nama,
            'tgl_beli' => $request->tgl_beli,
            'satuan' => $request->satuan,
            'kategori' => $request->kategori,
            'jml_baik' => $request->jml_baik,
            'jml_rusak' => $request->jml_rusak,
            'ruangan' => $request->ruangan,
            'imgs' => $request->imgs ?? 'Foto tidak tersedia',
        ];
        input_barang::where('seri', $id)->update($data);
        return redirect()->to('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        input_barang::where('seri', $id)->delete();
        return redirect()->to('barang');
    }
}
