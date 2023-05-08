<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $table = 'parkings';

    protected $fillable = [
        'nomPark',
        'ville',
        'nbPlace',
        'nbPlaceLibre'
    ];

    protected $primaryKey = 'idPark';

    public $timestamps = true;
}
