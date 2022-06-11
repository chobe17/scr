<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MermaDiaria extends Model
{
    use HasFactory;

    protected $table = 'mermas_diarias';
    protected $fillable = [

        'produccion',
        'descartes',
        'merma',
    ];
}
