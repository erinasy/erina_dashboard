<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_rooms')->insert([
            'id'=>'111',
            'name_type'=>'Presidential',
            'total'=>'7',
        ]);
        DB::table('type_rooms')->insert([
            'id'=>'112',
            'name_type'=>'Superior',
            'total'=>'9',
        ]);
        DB::table('type_rooms')->insert([
            'id'=>'113',
            'name_type'=>'Standart',
            'total'=>'20',
        ]);
        DB::table('type_rooms')->insert([
            'id'=>'114',
            'name_type'=>'Junior Seat',
            'total'=>'10',
        ]);
    }
}
