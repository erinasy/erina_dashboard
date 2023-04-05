<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamar')->insert([
            'kamar_id'=>'K_1',
            'lokasi'=>'lantai 2',
            'typeKamar_id'=>'TK_03',
            'no_kamar'=>'B15',
            'keterangan'=>'',
            'photo'=>''
        ]);
        DB::table('kamar')->insert([
            'kamar_id'=>'K_2',
            'lokasi'=>'lantai 2',
            'typeKamar_id'=>'TK_02',
            'no_kamar'=>'B12',
            'keterangan'=>'',
            'photo'=>''
        ]);
        DB::table('kamar')->insert([
            'kamar_id'=>'K_3',
            'lokasi'=>'lantai 4',
            'typeKamar_id'=>'TK_02',
            'no_kamar'=>'C10',
            'keterangan'=>'',
            'photo'=>''
        ]);
    }
}
