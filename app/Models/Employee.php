<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','dob','age','salary','department', 'cadre', 'job', 'salary',
        'residence','gender','role','biography'
    ];
}
