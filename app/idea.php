<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    public $table = 'idea';
    public $timestamps = false;
    protected $fillable = ['Title', 'Sub', 'Subject', 'Language'];
}
