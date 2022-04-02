<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'grade_cert',
        'grade_dip',
        'exam',
        'photo',
        'instructor_id',
        'status',
        'dep_id'
    ];
}
