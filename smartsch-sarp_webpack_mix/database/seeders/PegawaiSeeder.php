<?php

namespace Database\Seeders;

use App\Models\input_barang;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // data faker indonesia
         $faker = Faker::create('id_ID');
 
         // membuat data dummy sebanyak 10 record
         for($x = 1; $x <= 50; $x++){
  
             // insert data dummy pegawai dengan faker
             DB::table('peminjamanms')->insert([
                 'nama_peminjam' => $faker->name,
                 'status_peminjam' => $faker->sentence(5),
                 'nama_barang' => $faker->randomElement(input_barang::all())['nama'],
                 'mintgl_pinjam' => $faker->dateTime()->format('Y-m-d'),
                 'maxtgl_pinjam' => $faker->dateTime()->format('Y-m-d'),
                 'jumlah_pinjam' => $faker->randomNumber(1,5),
                 'alasan' => $faker->sentence(15),
             ]);
         }
    }
}
