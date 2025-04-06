<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    protected $guarded = false;

    public function workers()
    {
        return $this->hasMany(Worker::class, 'position_id', 'id');
    }
}
