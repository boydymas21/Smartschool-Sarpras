@extends('layouts.app')
@section('content')
<div class="card-body">
    <div class="container text-center">
            <div class="card ">
                <h2>Nomor Seri :</h2>
                <div>
                <h3>{{$data->seri}}</h3>
                </div>
            </div>
            <div class="card ">
                <h2>Nama Barang :</h2>
                <h3>{{$data->nama}}</h3>
            </div>
            <div class="card">
                <h2>Tanggal beli :</h2>
                <h3>{{$data->tgl_beli}}</h3>
            </div>
      
            <div class="card">
                <h2>Satuan Barang :</h2>
                <h3>{{$data->satuan}}</h3>
             </div>
             <div class="card">
                <h2>Kategori Barang :</h2>
                <h3>{{$data->kategori}}</h3>
            </div>

            <div class="card">
                <h2>Jumlah Barang Baik :</h2>
                <h3>{{$data->jml_baik}}</h3>
            </div>
            <div class="card">
                <h2>Jumlah Barang Rusak :</h2>
                <h3>{{$data->jml_rusak}}</h3>
            </div>
            <div class="card">
                <h2>Ruangan :</h2>
                <h3>{{$data->ruangan}}</h3>
            </div>
            
            <div class="card">
                <h3>Foto :</h3>
                <div>
                    <h3>{{$data->imgs}}</h3>
                </div>
                
            </div>
      </div>
    </div>
    
    
@endsection