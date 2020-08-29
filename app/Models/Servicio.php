<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
