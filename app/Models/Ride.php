<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = [
      'leader', 'type', 'departure_time', 'departure_location', 'miles', 'intensity', 'notes'
    ];
}
