<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = ['number','provider','account','date','value','filename','document'];
}
