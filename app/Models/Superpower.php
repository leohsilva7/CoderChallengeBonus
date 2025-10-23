<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    protected $hidden =[
        'updated_at',
        'created_at'
    ];
    public function primordialDuckSuperPower(): BelongsTo{
        return $this->belongsTo(PrimordialDuck::class);
    }
}
