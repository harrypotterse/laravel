<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    public $table = 'social';
    public $timestamps = true;
     protected $fillable = [ 'name', 'link', 'Image' ];
}
