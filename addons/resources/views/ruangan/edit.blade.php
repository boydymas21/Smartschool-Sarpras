@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif


<div class="card-header">
    <h1 class="card-title">Edit Ruangan</h1>
        </div>
<form action="{{url('ruangan/'.$datar->nama_ruangan)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="card-body">
        <div class="container">
            
                <div class="form-group col-sm-3">
                    <label>Nama Ruangan</label>
                    <input name="nama_ruangan" type="text" class="form-control" value="{{ $datar->nama_ruangan }}">
                </div>
          
          <div class="form-group col-sm-5">
            <label>Keterangan ruangan</label>
            <input name="ket_ru" type="text" class="form-control" value="{{ $datar->ket_ru }}">
        </div>
          <div class="form-group">
            <div class="col-sm-3">
            <label>Foto Ruangan</label>
            <input name="foto_ruangan" type="text" class="form-control" value="{{ $datar->foto_ruangan }}">
            </div>
        </div>
          <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
 
    </div>
    
</form>

@endsection