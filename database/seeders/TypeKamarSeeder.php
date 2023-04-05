<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_kamar')->insert([
            'typeKamar_id'=>'TK_01',
            'name_typeKamar'=>'Presidential',
            'harga'=>'50.000.000',
        ]);
        DB::table('type_kamar')->insert([
            'typeKamar_id'=>'TK_02',
            'name_typeKamar'=>'Superior',
            'harga'=>'1.000.000',
        ]);
        DB::table('type_kamar')->insert([
            'typeKamar_id'=>'TK_03',
            'name_typeKamar'=>'Standar',
            'harga'=>'500.000',
        ]);
    }
}
