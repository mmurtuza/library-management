<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    use HasFactory;
    protected $fillable = [

        'book_id',
        'student_id',
        'issue_date',
        'return_date',
        'fine',
        'status',
        'available_status',
        'added_by',
    ];
}
