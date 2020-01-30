<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sections_pro extends Model
{
    public $table = 'sections_pro';
    public $timestamps = false;
     protected $fillable = ['id', 'sections', 'Language', 'created_at', 'updated_at'];

     public function sections_pro()
    {
        return $this->hasMany('App\sections_pro','id');
    }
}
