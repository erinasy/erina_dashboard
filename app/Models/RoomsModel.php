<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeRoomModel;

class RoomsModel extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey ='id';
    protected $fillable = [
        'lokasi_rooms',
        'no_rooms',
        'typerooms_id',
        'harga_rooms',
        'keterangan'
        
    ];

    public function dt_type()
    {
        return $this->belongsTo(TypeRoomModel::class, 'typerooms_id');
    }
}
