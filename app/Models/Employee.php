<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'con_number',
    ];

    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
