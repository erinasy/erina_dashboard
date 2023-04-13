<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'id'=>'01',
            'lokasi_rooms'=>'lantai 2',
            'no_rooms'=>'2001',
            'typerooms_id'=>'113',
            'harga_rooms'=>'Rp.1.500.000',
            'keterangan'=>'',
        ]);
        DB::table('rooms')->insert([
            'id'=>'02',
            'lokasi_rooms'=>'lantai 3',
            'no_rooms'=>'3001',
            'typerooms_id'=>'114',
            'harga_rooms'=>'Rp.1.200.000',
            'keterangan'=>'',
        ]);
    }
}
