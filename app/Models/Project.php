<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'code',
        'name',
        'name_th',
        'nickname',
        'description',
        'advisor',
        'img',
        'dev_img',
        'design_img',
        'showreel_url',
        'demo_url',
        'interview_url'
    ];
}
