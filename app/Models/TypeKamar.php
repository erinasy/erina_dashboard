<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TypeKamar extends Model
{
    use HasFactory;

    protected $table = 'type_kamar';
    protected $primaryKey ='typeKamar_id';

    protected $fillable = [
        'name_typeKamar',
        'harga',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class,'typeKamar_id');
    }
}
