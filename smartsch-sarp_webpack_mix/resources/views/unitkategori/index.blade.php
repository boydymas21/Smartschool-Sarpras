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
    <h1 class="card-title">Setting Satuan Barang</h1>
        </div>
        <div class="card">
            <a href="{{route('unitkategori.create')}}">
            <button class="btn btn-primary col-sm">Tambah Satuan</button></a>
        </div>
    <div class="card-body">
        <table id="barangtable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Satuan</th>
                    <th>Option</th>
                    </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem()?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->nama_satuan}}</td>
                    <td>
                        <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{url('unitkategori/'.$item->nama_satuan)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr> 
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    
</form>

@endsection