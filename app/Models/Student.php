<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'dob',
        'marital',
        'secondary',
        'field',
        'study',
        'country',
        'location',
        'course_id'
    ];
}
