<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifParking extends Model
{
    use HasFactory;
    
    protected $table = 'tarif_parkings';

    protected $fillable = [
        'idPark',
        'idType',
        'prix',
    ];

    protected $primaryKey = ['idPark', 'idType'];

   

    // public function parking()
    // {
    //     return $this->belongsTo(Parking::class, 'idPark');
    // }

    // public function typeTarif()
    // {
    //     return $this->belongsTo(TypeTarif::class, 'idType');
    // }
}
