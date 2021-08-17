<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = ['sn','ip','office','black','color','usb','ethernet','wifi'];
}
