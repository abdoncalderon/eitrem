<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class _Model extends Model
{
    protected $table = 'models';
    
    protected $fillable = ['name','brand','type'];
    
}
