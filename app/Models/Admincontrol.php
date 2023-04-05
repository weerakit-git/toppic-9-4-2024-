<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admincontrol extends Model
{
    use HasFactory;


    protected $fillable = [
        'titel',
        'body',
        'service_image',
        'User_id'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','User_id');
    }
}
