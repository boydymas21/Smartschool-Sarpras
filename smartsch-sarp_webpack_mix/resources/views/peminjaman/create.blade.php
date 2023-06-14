<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Smartschool') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @yield('styles')
</head>

<body>

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

<a href="{{url('/')}}">
    <button class="btn btn-primary col-sm">Kembali</button>
</a>
<div class="card-header">
    <h1 class="card-title">Peminjaman</h1>
        </div>
<form onsubmit="return confirm('Apakah anda yakin?')" class="d-inline" action="{{url('peminjaman')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>Nama Peminjam</label>
                    <input name="nama_peminjam" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                    <label>Status Peminjam</label>
                    <input name="status_peminjam" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <div class="col-sm">
                    <label>Tanggal Meminjam</label>
                    <input name="mintgl_pinjam" type="date" class="form-control" placeholder="">
                    </div>
                </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="position-option">Barang</label>
                    <select class="form-control" name="nama_barang">
                        @foreach ($barang as $brobro)
                            <option>{{ $brobro->nama}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group col-sm-4">
                    <label>Alasan Meminjam</label>
                    <input name="alasan" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <div class="col-sm">
                    <label>Tanggal Pengembalian</label>
                    <input name="maxtgl_pinjam" type="date" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-2">
                    <label>Jumlah Peminjaman</label>
                    <input name="jumlah_pinjam" type="number" class="form-control" placeholder="">
                </div>
                <div class="form-group col-2">
                    <label>Surat Disposisi</label>
                    <input class="form-control" type="file" name="disposisi">
                </div>
                <div class="form-group col-2">
                    <label>Approvals</label>
                    <input class="form-control" type="text" name="approval"  disabled>
                </div>
            </div>
          </div>
        
        <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

<!-- REQUIRED SCRIPTS -->

<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}" defer></script>
<!-- datatables -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>let table = new DataTable('#barangtable');</script>
<script>let table = new DataTable('#pengadaantable');</script>
<script>
$(document).ready(function () {
                $('#laporanbarangtable').DataTable({
                    // script untuk membuat export data 
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                })
            });
</script>
@yield('scripts')
</body>
</html>
