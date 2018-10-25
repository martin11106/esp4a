<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adeudo extends Model
{
    protected $table='adeudo';
    protected $fillable =[
       'id_usuario','monto','fecha','status'
    ];

}
