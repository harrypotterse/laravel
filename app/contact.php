<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table = 'contact';
    public $timestamps = false;
    protected $fillable = ['Name', 'Email', 'message'];
}
