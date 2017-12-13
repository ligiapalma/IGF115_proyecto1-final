<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //
    protected $fillable = [
        'id_medico', 'id_paciente', 'resultado', 'tratamiento',
    ];
}
