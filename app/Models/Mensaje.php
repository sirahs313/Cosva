<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'mensaje',
        'usuario_id',
        'equipos_id',
        
    ];
    public function Equipos()
{
    return $this->HasMany(Equipo::class, 'equipo_id');
}
public function Usuarios()
{
    return $this->HasMany(User::class, 'user_id');
}
}
