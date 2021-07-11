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

    protected $appends = [
        'type_name'
    ];

    public function getTypeNameAttribute()
    {
        if($this->type == 1){
            $name = 'Front-End';
        } else if ($this->type == 2) {
            $name = 'Back-End';
        } else {
            $name = 'Database';
        }
        return $name;
    }
}
