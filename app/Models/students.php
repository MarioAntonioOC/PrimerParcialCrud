<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $table='students';
    protected $primarykey='id';
    protected $fileable=[
        'Nombre',
        'Apellidos',
        'Direccion',
        'Telefono',
        'Email'
    ];
}
