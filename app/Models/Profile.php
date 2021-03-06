<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $fillable = [
        'userid',
        'sex',
        'from',
        'old',
        'job',
        'profile',
    ];

    Public function user()
    {
      return $this->hasOne('App\Models\User','userid');
    }
}
