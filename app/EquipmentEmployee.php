<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentEmployee extends Model
{
    protected $table = 'equipments_x_employee';

    protected $fillable = ['idcard','sn','delivery_date','return_date', 'delivery_user','return_user', 'observation'];

}
