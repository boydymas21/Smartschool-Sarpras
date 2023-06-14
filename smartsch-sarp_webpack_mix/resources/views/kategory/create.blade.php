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
    <h1 class="card-title">Tambah Satuan</h1>
        </div>
<form action="{{url('kategory')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="container">
            
                <div class="form-group col-sm-3">
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" type="text" class="form-control" placeholder="">
                </div>
          <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
 
    </div>
    
</form>

@endsection