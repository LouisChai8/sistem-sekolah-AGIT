<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Table('students')]
#[Fillable('nis','name','gender','major','class')]

class Student extends Model
{
    
}