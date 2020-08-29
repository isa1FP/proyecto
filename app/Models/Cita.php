<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
