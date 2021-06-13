<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'dob'];
    protected $hidden = ['created_at']; // Hidden API

    public function getRouteKeyName()
    {
        return 'id';
    }
}
