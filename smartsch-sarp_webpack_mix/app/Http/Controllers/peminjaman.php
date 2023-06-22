<?php

namespace App\Http\Controllers;


use App\Models\input_barang;
use App\Models\peminjamanM;
use App\Models\approvals;
use Illuminate\Http\Request;

class peminjaman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peminjamanm::orderBy('id', 'desc')->get();
        $barang = input_barang::all();
        $appv = approvals::all();
        return view('peminjaman.index', compact('barang'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = input_barang::all();
        $appv = approvals::all();
        return view('peminjaman.create', compact('barang'));
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
            'nama_peminjam' =>'required',
            'status_peminjam' =>'required',
            'nama_barang' =>'required',
            'mintgl_pinjam' =>'required',
            'jumlah_pinjam' =>'required',
            'alasan' =>'required',
            


        ],[
            'nama_peminjam.required' => 'Nama peminjam wajib diisi',
            'status_peminjam.required' => 'Status peminjam wajib diisi',
            'nama_barang.required' => 'Nama barang wajib diisi',
            'mintgl_pinjam.required' => 'Tanggal peminjaman wajib diisi',
            'maxtgl_pinjam.required' => 'Tanggal pengembalian wajib diisi',
            'jumlah_pinjam.required' => 'jumlah wajib diisi',
            'alasan.required' => 'alasan wajib diisi',
            

        ]);
        $data = [
            'nama_peminjam' => $request->nama_peminjam,
            'status_peminjam' => $request->status_peminjam,
            'nama_barang' => $request->nama_barang,
            'mintgl_pinjam' => $request->mintgl_pinjam,
            'maxtgl_pinjam' => $request->maxtgl_pinjam,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'alasan' => $request->alasan,
            'disposisi' => $request->disposisi ?? 'Tidak Terlampir',
            'approval' => $request->approval ?? 'Belum Disetujui',
        ];
        peminjamanM::create($data);
        return redirect()->to('peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = peminjamanM::orderBy('id', 'desc')->get();
        return view('peminjaman.laporan')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = peminjamanM::where('nama_peminjam',$id)->first();
        return view('peminjaman.edit')->with('data',$data);
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
            'approval' =>'required',
        ],[
            'approval.required' => 'approval wajib diisi',
        ]);
        $data = [
            'approval' => $request->approval,
        ];
        peminjamanM::where('nama_peminjam', $id)->update($data);
        return redirect()->to('suratmasuk');
    }

    public function laporann()
    {   
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
