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

    protected $appends = [
        'role_name',
        'interview_url_code'
    ];

    public function getRoleNameAttribute()
    {
        if($this->role == 1){
            $role_name = 'Developer';
        } else if ($this->role == 2){
            $role_name = 'Designer';
        } else {
            $role_name = 'Developer & Designer';
        }
        return $role_name;
    }

    public function getInterviewUrlCodeAttribute()
    {
        $url = $this->interview_url;
        $code = explode("/", $url);
        return $code[3];
    }

    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'project_id');
    }

    public function resources()
    {
        return $this->hasMany('App\Models\FreeResource');
    }
}
