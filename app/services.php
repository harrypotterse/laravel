<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class services extends Model
{

    public $table = 'services';
    public $timestamps = false;
    protected $fillable = ['Title', 'Subtitle', 'Image', 'Language'];
}
