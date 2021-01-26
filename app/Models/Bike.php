<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
      'owner', 'email', 'brand', 'model', 'maintenance'
    ];
}
