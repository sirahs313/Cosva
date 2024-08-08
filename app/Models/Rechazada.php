<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rechazada extends Model
{
    use HasFactory;
    protected $fillable = [
        'motivo',
        'usuario_id',
    
        
    ];
}
