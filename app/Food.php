<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
        protected $fillable = [
        'foodseaten',
    ];
    
}
