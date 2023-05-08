<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationnement extends Model
{
    use HasFactory;
    protected $table = 'stationnements';

    protected $fillable = ['dateStat', 'idUtil', 'idPark', 'idType', 'nbUnit'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'idUtil');
    }

    public function parking()
    {
        return $this->belongsTo(Parking::class, 'idPark');
    }

    public function typeTarif()
    {
        return $this->belongsTo(TypeTarif::class, 'idType');
    }
}
