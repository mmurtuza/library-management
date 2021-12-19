<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = array(
        'category',
        'name'
    );

    public $timestamps = false;

    protected $table = 'book_categories';
    protected $primaryKey = 'id';

    protected $hidden = array();
}
