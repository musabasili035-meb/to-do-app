<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // // Allow mass assignment for these fields
    protected $fillable = ['title', 'description','image'];
}
