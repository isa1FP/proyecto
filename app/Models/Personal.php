<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';
    public $timestamps = false; // omita los campos por defectos "created_at", "updated_at"
}
