<?php

namespace App\Models;
use

Illuminate\Database\Eloquent\Factories\HasFactory;
use

Illuminate\Foundation\Auth\User

as

Authenticatable; // Import this
use Illuminate\Notifications\Notifiable;

class Salesman extends Authenticatable
{
  use HasFactory, Notifiable;

    protected $guard = 'salesmen';
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'password',
        'isSalesmans',
    ];
}
