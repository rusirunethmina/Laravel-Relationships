<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
         'name',
         'email',
         'address',
         'course_id',
    ];

}
