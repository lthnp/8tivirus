<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'project_id',
        'sid',
        'firstname',
        'lastname',
        'nickname',
        'firstname_th',
        'lastname_th',
        'nickname_th',
        'email',
        'fb',
        'portfolio',
        'img',
        'img_art',
        'art_url',
        'role',
        'interview_url',
    ];

    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'project_id');
    }
}
