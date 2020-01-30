<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    public $table = 'banner';
    public $timestamps = false;
    protected $fillable = ['Title', 'Image', 'css', 'Language'];
}
