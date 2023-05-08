<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utlisateur extends Model
{
    use HasFactory;
     protected $table = 'utilisateurs';

    protected $fillable = [
        'nomUtil',
        'prenUtil',
        'adresseUtil',
        'pass'
    ];

    protected $primaryKey = 'idU';

    public $timestamps = true;
}
