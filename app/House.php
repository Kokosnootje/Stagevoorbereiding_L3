<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class House extends Model
{
    protected $fillable = [
        'name', 'professor_id',
    ];

    public function professor(){
        return $this->belongsTo(User::class);
    }

    public function points_today(){
        return $this->hasMany(PointsToday::class);
    }

    public function scopeCurrent_points(){
        return collect($this->points_today()->whereDate('created_at', '=', Carbon::today()->toDateString())->first());
    }
}
