<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planning extends Model
{
    public $table = 'planning';
    public $timestamps = false;
    protected $fillable = ['Title', 'Subject', 'Language'];
    
}
