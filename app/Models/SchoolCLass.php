<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('classes')]
#[Fillable('name')]
class SchoolClass extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
