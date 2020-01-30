<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $table = 'blog';
    public $timestamps = false;
    protected $fillable = [ 'Title', 'Subject', 'Picture1', 'Picture2', 'Picture3', 'Language', 'Visits'];
}
