<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeResource extends Model
{
    use HasFactory;

    protected $table = 'free_resources';

    protected $fillable = [
        'student_id',
        'title',
        'img',
        'download_url'
    ];

    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
}
