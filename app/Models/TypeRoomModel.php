<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoomModel extends Model
{
    use HasFactory;
    protected $table = 'type_rooms';
    //protected $primaryKey ='typerooms_id';
    protected $fillable = [
        'name_type',
        'total'
    ];

    public function dt_room()
    {
        return $this->hasMany(RoomsModel::class, 'id');
    }
}
