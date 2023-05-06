<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input_barang;
use Symfony\Component\Console\Input\Input;

class barangController extends Controller
{
    public function barang(){
        $barangs = input_barang::all();
        return view('inputbrg',compact('barangs'));
    }

    public function create(){
        
    }
}
