<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    
    protected $fillable = [
        'customers_id',
        'name_customers',
        'nik',
        'jk',
        'no_tlp',
        'alamat'
    ];

    public function customers()
    {
        return $this->hasOne(Customers::class, 'fasilitas_id');
    }

    
}
