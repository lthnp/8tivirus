<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    use HasFactory;

    protected $table = 'project_details';

    protected $fillable = [
        'project_id',
        'func1',
        'func1_start',
        'func1_stop',
        'func2',
        'func2_start',
        'func2_stop',
        'func3',
        'func3_start',
        'func3_stop',
        'bs_code',
        'bs_code_description',
        'bs_code_ref',
        'bs_design',
        'bs_design_description',
        'bs_design_ref'
    ];
}
