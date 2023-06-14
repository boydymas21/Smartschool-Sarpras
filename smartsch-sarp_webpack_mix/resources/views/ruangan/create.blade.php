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
    <h1 class="card-title">Ruangan Baru</h1>
        </div>
<form action="{{url('ruangan')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="container">
            
                <div class="form-group col-sm-3">
                    <label>Nama Ruangan</label>
                    <input name="nama_ruangan" type="text" class="form-control" placeholder="">
                </div>
          
          <div class="form-group col-sm-5">
            <label>Keterangan ruangan</label>
            <input name="ket_ru" type="text" class="form-control" placeholder="">
        </div>
          <div class="form-group">
            <div class="col-sm-3">
            <label>Foto Ruangan</label>
            <input name="foto_ruangan" type="text" class="form-control" placeholder="">
            </div>
        </div>
          <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
 
    </div>
    
</form>

@endsection