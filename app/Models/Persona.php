<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'project_id',
        'name',
        'job',
        'age',
        'background',
        'identity1',
        'identity1_score',
        'identity2',
        'identity2_score',
        'identity3',
        'identity3_score',
        'identity4',
        'identity4_score',
        'img',
    ];
}
