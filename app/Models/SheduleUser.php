<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheduleUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'shedule_id',
        'user_id'
    ];
}
