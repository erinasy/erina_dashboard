<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TypeKamar extends Model
{
    use HasFactory;

    protected $table = 'type_kamar';

    protected $fillable = [
        'typeKamar_id',
        'name_typeKamar',
        'harga',
    ];

    public function kamar()
    {
        return $this->hasOne(Kamar::class,'typeKamar_id');
    }
}
