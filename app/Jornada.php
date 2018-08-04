<?php

namespace GestionJornadas;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'dni','email','telefono','profesion','localidad','observaciones', 'codigojornada', 'importe','esta_pago'
    ];
}