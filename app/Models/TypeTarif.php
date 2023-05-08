<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTarif extends Model
{
    use HasFactory;
    protected $table = 'type_tarifs';

    protected $fillable = [
        'nomType',
    ];

    protected $primaryKey = 'idT';

    public $timestamps = true;
}
