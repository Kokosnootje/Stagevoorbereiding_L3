<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointsChange extends Model
{
	protected $fillable = [
        'change', 'is_positive', 'points_today_id',
    ];
}
