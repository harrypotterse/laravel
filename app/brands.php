<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    public $table = 'brands';
    public $timestamps = false;
    protected $fillable = ['id', 'pic'];
}
