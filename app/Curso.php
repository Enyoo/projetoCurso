<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['course', 'description'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'cursos';
}
