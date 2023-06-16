@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Surat Masuk</h3>
                    <div class="row">
                    </div>
                </div>
    
                <div class="card-body">
                    <table id="barangtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Peminjam</th>
                                <th>Status Peminjam</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pegembalian</th>
                                <th>Jumlah Pinjam</th>
                                <th>Alasan Peminjaman</th>
                                <th>Surat Disposisi</th>
                                <th>Approval</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php $i = $data->firstItem()?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$i}}</td>
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
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
                </div>
                </div>
@endsection