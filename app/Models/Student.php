<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('students')]
#[Fillable('nis','class','major')]

class Student extends Model
{

}