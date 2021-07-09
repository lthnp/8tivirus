<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogNoComment extends Model
{
    use HasFactory;

    protected $table = 'log_no_comments';

    protected $fillable = [
        'project_id',
        'ip',
        'browser',
        'device',
        'os'
    ];
}
