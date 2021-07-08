<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
        'portrait_vdo_url',
        'showreel_url',
        'demo_url',
        'category',
        'type',
    ];

    protected $appends = [
        'demo_url_code'
    ];

    public function getDemoUrlCodeAttribute()
    {
        $demo_url = $this->demo_url;
        $demo_url_code = explode("/", $demo_url);
        return $demo_url;
    }

    // Project Detail
    public function detail()
    {
        return $this->hasOne('App\Models\ProjectDetail');
    }
    public function techs()
    {
        return $this->hasMany('App\Models\ProjectTech');
    }
    public function screenshots()
    {
        return $this->hasMany('App\Models\Screenshot');
    }
    public function persona()
    {
        return $this->hasOne('App\Models\Persona');
    }

    // Student in Project
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

    // Feedback from Visitor
    public function reactionAll()
    {
        return $this->hasMany('App\Models\Reaction');
    }
    public function reaction()
    {
        return $this->hasOne('App\Models\Reaction');
    }
    public function commentAll()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function comment()
    {
        return $this->hasOne('App\Models\Comment');
    }

}
