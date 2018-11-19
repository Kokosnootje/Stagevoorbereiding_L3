<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name', 'professor_id',
    ];

    public function professor(){
        return $this->belongsTo(User::class);
    }
}
