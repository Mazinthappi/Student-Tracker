<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function getStatusTextAttribute(){  //accesor convert (this getStatusTextAttribute in to staus_text
        if ($this->status== 1)
            return "placed";
        else
            return "Delivered";       
    }
    protected $appends= ['status_text'];
    protected $table='orders';
}
