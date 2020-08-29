<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
