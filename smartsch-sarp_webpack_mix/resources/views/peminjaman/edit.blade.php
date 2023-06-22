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
    <h1 class="card-title">Edit approval</h1>
        </div>
<form action="{{url('peminjaman/'.$data->nama_peminjam.'/edit')}}" method="POST">
    @csrf
    @method("PUT")
    <div class="card-body">
        <div class="container">
            
                <div class="form-group col-sm-3">
                    <label>Persetujuan</label>
                    <select class="form-control" name="approval" value="{{$data->approval}}">
                           <option>Disetujui</option>
                           <option>Belum Disetujui</option>
                     </select>
                </div>

          <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
 
    </div>
    
</form>

@endsection