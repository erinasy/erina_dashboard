<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';

    protected $fillable = [
        'reservasi_id',
        'customers_id',
        'kamar_id',
        'fasilitas_id',
        'check_in',
        'check_out',
        'total_pembayaran',
    ];
    public function customersReservasi()
    {
        return $this->belongsTo(Customers::class, 'customers_id');
    }
    public function kamarReservasi()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
    public function fasilitasReservasi()
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id');
    }
}
