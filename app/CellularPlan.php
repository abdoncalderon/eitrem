<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CellularPlan extends Model
{
    protected $table = 'cellular_plans';
    
    protected $fillable = ['name','brand','type'];
}
