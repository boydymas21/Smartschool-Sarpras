<?php

namespace App\Http\Controllers;

use App\Models\approvals;
use App\Models\input_barang;
use App\Models\peminjamanm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function suratmasuk()
    {
        $data = peminjamanm::orderBy('id', 'desc')->paginate(10);
        $barang = input_barang::all();
        $appv = approvals::all();
        return view('suratmasuk', compact('barang'))->with('data', $data);
    }
}
