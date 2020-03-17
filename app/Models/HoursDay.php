<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoursDay extends Model
{
    protected $fillable = ['day_id', 'hour'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
