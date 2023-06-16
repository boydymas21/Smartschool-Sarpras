<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\ruangan;
use App\Models\satuan;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class barangSeed extends Seeder
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
             DB::table('input_barangs')->insert([
                 'seri' => $faker->unique()->sentence(1),
                 'nama' => $faker->sentence(1),
                 'tgl_beli' => $faker->dateTime()->format('Y-m-d'),
                 'satuan' => $faker->randomElement(satuan::all())['nama_satuan'],
                 'kategori' => $faker->randomElement(kategori::all())['nama_kategori'],
                 'jml_baik' => $faker->randomNumber(1,5),
                 'jml_rusak' => $faker->randomNumber(1,5),
                 'ruangan' => $faker->randomElement(ruangan::all())['nama_ruangan'],
                 'imgs' => $faker->sentence(1),
             ]);
         }
    }
}
