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
        'logo',
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
        'portrait_url_code',
        'showreel_url_code',
        'demo_url_code',
        'category_name'
    ];

    public function getPortraitUrlCodeAttribute()
    {
        $url = $this->portrait_vdo_url;
        $code = explode("/", $url);
        return $code[3];
    }

    public function getShowreelUrlCodeAttribute()
    {
        $url = $this->showreel_url;
        $code = explode("/", $url);
        return $code[3];
    }

    public function getDemoUrlCodeAttribute()
    {
        $demo_url = $this->demo_url;
        $demo_url_code = explode("/", $demo_url);
        return $demo_url_code[3];
    }

    public function getCategoryNameAttribute()
    {
        if($this->category == 1){
            $category_name = 'Life-Quality Improvements';
        } else if($this->category == 2) {
            $category_name = 'Digital Technology Improves Well-Being';
        } else if($this->category == 3) {
            $category_name = 'Creative Media Supporting Digital Education';
        } else if($this->category == 4) {
            $category_name = 'Supporting Businesses in Growing';
        }
        return $category_name;
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
    public function noComment()
    {
        return $this->hasOne('App\Models\LogNoComment');
    }

}
