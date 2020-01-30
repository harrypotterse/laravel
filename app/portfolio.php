<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    public $table = 'portfolio';
    public $timestamps = false;
     protected $fillable = ['Image',  'Language', 'sections_prog' ];



     public function sectionspro()
    {
        return $this->hasMany('App\sections_pro','id','sections_prog');
    }


    public function sections_pro()
    {
        return $this->hasMany('App\sections_pro','id');
    }
    
}
