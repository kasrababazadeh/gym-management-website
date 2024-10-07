<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monday extends Model
{
    use HasFactory;
    protected $fillable = ['user-code-melli', 'first-exercise', 'first-exercise-number', 'second-exercise', 'second-exercise-number', 'third-exercise', 'third-exercise-number', 'forth-exercise', 'forth-exercise-number', 'fifth-exercise', 'fifth-exercise-number', 'sixth-exercise', 'sixth-exercise-number', 'seventh-exercise', 'seventh-exercise-number', 'eighth-exercise', 'eighth-exercise-number'];
}
