<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
         'id',
         'name',
         'date',
         'time'
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
