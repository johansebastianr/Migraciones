<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Conductor_perfil()
    {
        return $this->hasOne(Conductor_perfil::class);
    }

    public function Usuairo_perfil()
    {
        return $this->hasOne(Usuairo_perfil::class);
    }

    public function Pasajero()
    {
        return $this->hasOne(Pasajero::class);
    }
}
