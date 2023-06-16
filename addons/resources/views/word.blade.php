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
    
    <a href="{{url('/')}}">
        <button class="btn btn-primary col-sm">Kembali</button>
    </a>
    <h2 class="text-center mt-4 form-group">Pembuatan surat Peminjaman</h2>
    <div class="container">
        <div class="row">
        <form action="{{route('word')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" placeholder="nama">
            </div>
            <div class="form-group">
                <label>Kelas :</label>
                <input type="text" name="kelas" placeholder="kelas">
            </div>

            <div class="form-group">
                <label>Barang yang dipinjam :</label>
                <input type="text" name="barang" placeholder="(jumlah)(barang)">
            </div>

            <div class="form-group">
                <label>Kepentingan :</label>
                <input type="text" name="kepentingan" placeholder="kepentingan">
            </div>

            <div class="form-group">
                <label>Tanggal Peminjaman :</label>
                <input type="date" name="tanggal1" placeholder="Tanggal peminjaman">
            </div>

            <div class="form-group">
                <label>Tanggal Pengembalian :</label>
                <input type="date" name="tanggal2" placeholder="Tanggal Pengembalian">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
    </div>
    </div>

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
<script>let table = new DataTable('#peminjamantable');</script>
@yield('scripts')
</body>
</html>

