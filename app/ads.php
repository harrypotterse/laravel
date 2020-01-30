<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    public $table = 'ads';
    public $timestamps = false;
    protected $fillable = ['id', 'pic'];
}
