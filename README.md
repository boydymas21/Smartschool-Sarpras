# Smartschool-Sarpras
ini aku pakek adminlte3 rek untuk login sama dashboard nya, base nya bootstrap 5
nama database nya "smartsch-sarp"

kalo mau coba test website :
- masuk ke folder smartsch-sarp lewat vscode
- bikin 2 terminal cmd di vscode
- terminal pertama ketik '"npm run dev", terminal kedua ketik "php artisan serve"

coba register dah kalo mau

Fitur
- Home (User public bisa melihat homepage untuk membuat peminjaman atau surat disposisi)
- Login (Admin atau Wakases diharuskan untuk login sesuai hak akses masing masing)
- Pendataan Barang (Admin dapat mengelola data barang Sarana Prasarana)
- pengadaan barang baru (Admin dapat mengelola pengadaan barang baru sebelum masuk pada tahap pendataan)
- pengadaan barang rusak (Admin dapat mengelola pengadaan barang yang sudah rusak)
- laporan bulanan barang (Admin dapat melihat data laporan bulanan barang)
- Pendataan Ruangan (Admin dapat mengelola data ruangan)
- Pembuatan surat disposisi (User public dapat membuat surat disposisi peminjaman)
- Peminjaman barang/ruangan (User public dapat membuat data peminjaman barang atau ruangan)
- laporan peminjaman barang/ruangan (Admin dapat melihat data laporan peminjaman barang/ruangan)
- Approval peminjaman (Wakasek dapat mengelola status peminjaman yang masuk)
- Status approval peminjaman (Admin dapat melihat status approval peminjaman)

Yang sudah ada
- login
- desain website
- database barang
- menampilkan tabel list barang
- routes ke input barang

Yang belum masuk di project nya
- halaman utama
- tabel tabel lain beserta routes nya
- fungsi crud melalui website
- pembuatan surat disposisi
