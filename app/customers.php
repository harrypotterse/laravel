<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    public $table = 'customers';
    public $timestamps = false;
    protected $fillable = ['Image', 'Name', 'Word', 'Language', 'Facebook'];
}
