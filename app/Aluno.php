<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    
    protected $fillable = ['name', 'email', 'birth', 'course'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
