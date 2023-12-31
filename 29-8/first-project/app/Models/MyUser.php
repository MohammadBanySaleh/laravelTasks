<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    use HasFactory;
    protected $table = 'myusers';
    protected $fillable = ['name', 'email', 'pass'];
}
