<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    protected $guarded = [''];
    use HasFactory;
    protected $table='student_addresses';
    

    public function students(){
        return $this->belongsTo(Student::class,'user_id','id');
    }
}
