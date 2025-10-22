<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superpower extends Model
{
    protected $fillable =[
        'name',
        'description',
        'classifications',
        'primordial_duck_id'
    ];
    protected $casts = [
        'classifications' => 'array',
    ];
}
