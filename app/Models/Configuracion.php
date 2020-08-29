<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
