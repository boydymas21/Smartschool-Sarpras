@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Laporan Barang</h3>
                </div>
    
        <div class="card-body">
            <table id="laporanbarangtable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nomor Seri</th>
                        <th>Nama</th>
                        <th>Tanggal Beli</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Jumlah Baik</th>
                        <th>Jumlah Rusak</th>
                        <th>Ruangan</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem()?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->seri}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tgl_beli}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->jml_baik}} {{$item->satuan}}</td>
                        <td>{{$item->jml_rusak}} {{$item->satuan}}</td>
                        <td>{{$item->ruangan}}</td>
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