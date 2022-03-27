<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department',
        'semester',
        'student_id',
        'approved',
        'rejected',
        'branch',
        'year',
        'books_issued',
        'email_id'
    ];
}
