<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    
    protected $fillable = [
        'kamar_id',
        'lokasi',15,
        'typeKamar_id',
        'no_kamar',
        'keterangan',
        'photo'
    ];

    public function typeKamar()
    {
        return $this->belongsTo(TypeKamar::class, 'typeKamar_id');
    }
}
