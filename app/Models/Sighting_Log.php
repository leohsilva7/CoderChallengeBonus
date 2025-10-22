<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sighting_Log extends Model
{
    protected $fillable =[
        'raw_data_payload',
        'sighted_at',
        'survey_drone_id',
        'primordial_duck_id'
    ];
}
