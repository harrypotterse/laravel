<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class steps extends Model
{
    public $table = 'steps';
    public $timestamps = false;
    protected $fillable = ['Icon', 'Title', 'Explanation', 'Language'];
    public function scopesteps($query, $id)
    {
  
            return $query->where('Language', 'English');
   
            return $query->where('Language', 'Arabic');
        
    }
}
