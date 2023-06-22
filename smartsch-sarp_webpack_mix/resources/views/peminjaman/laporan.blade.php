@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Laporan Peminjaman</h3>
                </div>
    
        <div class="card-body">
            <table id="laporanbarangtable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nama Peminjam</th>
                    <th>Status Peminjam</th>
                    <th>Nama_Barang</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pegembalian</th>
                    <th>Jumlah Pinjam</th>
                    <th>Alasan Peminjaman</th>
                    <th>Surat Disposisi</th>
                    <th>Approval</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach ($data as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_peminjam}}</td>
                    <td>{{$item->status_peminjam}}</td>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->mintgl_pinjam}}</td>
                    <td>{{$item->maxtgl_pinjam}}</td>
                    <td>{{$item->jumlah_pinjam}}</td>
                    <td>{{$item->alasan}}</td>
                    <td>{{$item->disposisi}}</td>
                    <td>{{$item->approval}}</td>
                    </tr> 
                
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection