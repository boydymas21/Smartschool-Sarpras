<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanm extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_peminjam', 'status_peminjam', 'nama_barang', 'mintgl_pinjam', 'maxtgl_pinjam','jumlah_pinjam', 'alasan','disposisi','approval'];
}
