@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">List Barang</h3>
                    <div class="row">
                        <div class="col-auto">
                            <a href="{{ route('createbrg.create') }}"><button type="button" class="btn btn-block btn-primary">+</button></a>
                        </div>
                    </div>
                </div>
    
        <div class="card-body">
            <table id="barangtable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Jumlah Baik</th>
                        <th>Jumlah Rusak</th>
                        <th>ruangan</th>
                        <th>info</th>
                        <th>Options</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->jml_baik}}</td>
                        <td>{{$item->jml_rusak}}</td>
                        <td>{{$item->ruangan}}</td>
                        <td>X</td>
                        <td>X</td>
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