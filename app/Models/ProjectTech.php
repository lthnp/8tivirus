<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTech extends Model
{
    use HasFactory;

    protected $table = 'project_teches';

    protected $fillable = [
        'project_id',
        'type',
        'tech'
    ];
}
