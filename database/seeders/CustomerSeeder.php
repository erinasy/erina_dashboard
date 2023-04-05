<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customers_id'=>'P01',
            'name_customers'=>'Putra Aarya Saloka',
            'nik'=>'12345678910',
            'jk'=>'L',
            'no_tlp'=>'0871234567',
            'alamat'=>'Jl Nangka', 
        ]);
        DB::table('customers')->insert([
            'customers_id'=>'P02',
            'name_customers'=>'Putri Ayu Ning T',
            'nik'=>'21222324252627',
            'jk'=>'P',
            'no_tlp'=>'08981234567',
            'alamat'=>'Jl Jeruk ',
        ]);
        DB::table('customers')->insert([
            'customers_id'=>'P03',
            'name_customers'=>'Ridwan Sanjaya',
            'nik'=>'67686990897623',
            'jk'=>'L',
            'no_tlp'=>'0815192087521',
            'alamat'=>'Jl Apel ',
        ]);
    }
}
