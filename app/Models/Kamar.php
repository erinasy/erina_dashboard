<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    protected $primaryKey ='kamar_id';

    protected $fillable = [
        'lokasi',
        'typeKamar_id',
        'no_kamar',
        'keterangan',
        'photo'
    ];

    //relasi one to many dengan typeKamar
    public function type_kamar()
    {
        return $this->belongsTo(TypeKamar::class, 'typeKamar_id');
    }
    //public function reservasi(){return $this->HasMany(Reservasi::class, 'kamar_id');}
}
