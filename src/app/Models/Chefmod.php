<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefmod extends Model
{
    use HasFactory;
    protected $table = 'chefmods';
    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
    ];
}
