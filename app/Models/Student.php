<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use  HasFactory, SoftDeletes;
    //protected $dates= ['date_of_birth'];
    protected $guarded = [''];
    protected $hidden =['id'];
    protected $table='students';

    public function address(){
        return $this->hasOne(StudentAddress::class,'user_id','id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'order_id','id');
    }
}
