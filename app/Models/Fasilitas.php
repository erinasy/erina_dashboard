<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    
    protected $fillable = [
        'fasilitas_id',
        'nama_fasilitas',
        'harga_fasilitas',
        'keterangan',
        'photo'
    ];

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'fasilitas_id');
    }
}
