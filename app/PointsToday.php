<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointsToday extends Model
{
	protected $fillable = [
        'house_id', 'score',
    ];
	protected $table = 'points_today';

	public function house(){
        return $this->belongsTo(House::class);

    }
}
