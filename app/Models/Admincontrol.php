<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincontrol extends Model
{
    use HasFactory;


    protected $fillable = [
        'titel',
        'body',
        'service_image',
        'User_id'
    ];
}
