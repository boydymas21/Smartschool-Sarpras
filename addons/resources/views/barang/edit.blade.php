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
    <h1 class="card-title">Edit Barang</h1>
        </div>
<form action="{{url('barang/'.$data->seri)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>Nomor Seri</label>
                    <div>
                    <input name="disablednama" type="text" class="form-control" value="{{ $data->seri }}" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label>Nama Barang</label>
                    <input name="nama" type="text" class="form-control" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <div class="col-sm">
                    <label>Tanggal beli</label>
                    <input name="tgl_beli" type="date" class="form-control" value="{{$data->tgl_beli}}">
                    </div>
                </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="position-option">Satuan Barang (silahkan pilih ulang satuan)</label>
                    <select class="form-control" name="satuan" value="{{$data->satuan}}">
                       @foreach ($satuan as $brobro)
                          <option>{{ $brobro->nama_satuan}}</option>
                       @endforeach
                    </select>
                 </div>
                 <div class="form-group col-sm-4">
                    <label for="position-option">Kategori Barang (silahkan pilih ulang kategori)</label>
                    <select class="form-control" name="kategori" value="{{$data->kategori}}">
                        @foreach ($kategori as $bro)
                           <option>{{ $bro->nama_kategori}}</option>
                        @endforeach
                     </select>
                </div>
                <div class="col-sm"></div>
            </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-2">
                    <label>Jumlah Barang Baik</label>
                    <input name="jml_baik" type="number" class="form-control" value="{{$data->jml_baik}}">
                </div>
                <div class="form-group col-2">
                    <label>Jumlah Barang Rusak</label>
                    <input name="jml_rusak" type="number" class="form-control" value="{{$data->jml_rusak}}">
                </div>
                <div class="form-group col-sm-4">
                    <label for="position-option">Ruangan (silahkan pilih ulang ruangan)</label>
                    <select class="form-control" name="ruangan" value="{{$data->ruangan}}">
                        @foreach ($ruangan as $brobrobro)
                           <option>{{ $brobrobro->nama_ruangan}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
          </div>
        
        <div class="form-group col-4">
            <label>Foto</label>
            <input class="form-control" type="text" name="imgs" value="{{$data->imgs}}">
        </div>
        <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        <!--
        <div class="form-group">
            <label for="file">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
        </div>
        -->
    </div>
    </div>
</form>

@endsection