<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            'fasilitas_id'=>'FS1',
            'nama_fasilitas'=>'Tempat Gym',
            'harga_fasilitas'=>'Rp 50000',
            'keterangan'=>'',
            'photo'=>''
        ]);
        DB::table('fasilitas')->insert([
            'fasilitas_id'=>'FS2',
            'nama_fasilitas'=>'Osen',
            'harga_fasilitas'=>'Rp 75000',
            'keterangan'=>'',
            'photo'=>''
        ]);
        DB::table('fasilitas')->insert([
            'fasilitas_id'=>'FS3',
            'nama_fasilitas'=>'Spa/Salon',
            'harga_fasilitas'=>'Rp 200000',
            'keterangan'=>'',
            'photo'=>''
        ]);
    }

}