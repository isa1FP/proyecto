<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
