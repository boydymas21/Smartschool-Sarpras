<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wordController extends Controller
{
    public function index(Request $request){
        $nama = $request->nama;
        $kelas = $request->kelas;
        $barang = $request->barang;
        $kepentingan = $request->kepentingan;
        $tanggal1 = $request->tanggal1;
        $tanggal2 = $request->tanggal2;

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('myWord.docx');

        $phpWord->setValues([
            'nama'=> $nama,
            'kelas'=> $kelas,
            'barang'=> $barang,
            'kepentingan'=> $kepentingan,
            'tanggal1'=> $tanggal1,
            'tanggal2'=> $tanggal2,
        ]);

        header("Content-Disposition: attachment; filename=disposition.docx ");
        $phpWord->saveAs('php://output');
    }
}
