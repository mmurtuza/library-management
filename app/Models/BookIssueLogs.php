<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssueLogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'issued_by',
        'issued_at',
        'return_time',
        'book_id',
        'fine',
        'status',
    ];
}
