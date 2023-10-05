<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

    protected $table = 'passwords';

    protected $fillable = [
        'password',
        'token',
        'user_id',
        'type'

    ];
}
