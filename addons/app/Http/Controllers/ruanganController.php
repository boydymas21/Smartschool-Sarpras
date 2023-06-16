<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class ruanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datar = ruangan::orderBy('id', 'desc')->paginate(10);
        return view('ruangan.index')->with('datar', $datar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create');
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
            'nama_ruangan' =>'required|unique:ruangans,nama_ruangan',
            'ket_ru' =>'required',
            
        ],[
            'nama_ruangan.required' => 'Nama Ruangan wajib diisi',
            'nama_ruangan.unique' => 'Ruangan sudah ada dalam database',
            'ket_ru.required' => 'Keterangan Ruangan wajib diisi',
            
        ]);
        $data = [
            'nama_ruangan' => $request->nama_ruangan,
            'ket_ru' => $request->ket_ru,
            'foto_ruangan' => $request->foto_ruangan ?? 'foto tidak tersedia',
        ];
        ruangan::create($data);
        return redirect()->to('ruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datar = ruangan::where('nama_ruangan',$id)->first();
        return view('ruangan.edit')->with('datar', $datar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan' =>'required',
            'ket_ru' =>'required',
            'foto_ruangan' =>'required',
        ],[
            'nama_ruangan.required' => 'Nama Ruangan wajib diisi',
            'nama_ruangan.unique' => 'Ruangan sudah ada dalam database',
            'ket_ru.required' => 'Keterangan Ruangan wajib diisi',
            'foto_ruangan.required' => 'Foto barang wajib diisi',
        ]);
        $datar = [
            'nama_ruangan' => $request->nama_ruangan,
            'ket_ru' => $request->ket_ru,
            'foto_ruangan' => $request->foto_ruangan,
        ];
        ruangan::where('nama_ruangan', $id)->update($datar);
        return redirect()->to('ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ruangan::where('nama_ruangan', $id)->delete();
        return redirect()->to('ruangan');
    }
}
