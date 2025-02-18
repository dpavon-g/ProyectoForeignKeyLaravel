<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;

    protected $fillable = [
        'Ubicacion',
        'Agent_id',
        'Category_id',
    ];
}
