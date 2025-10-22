<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Survey_Drone extends Model
{
    protected $fillable=[
        'serial_number',
        'brand',
        'manufacturer_id'
    ];
    public function sighting_logs() :HasMany{
        return $this->hasMany(Sighting_Log::class, 'survey_drone_id');
    }
}
