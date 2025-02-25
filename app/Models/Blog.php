<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Define the table
    protected $table = 'posts';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'body',
    ];
}
