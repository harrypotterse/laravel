<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_categories extends Model
{
public $table = 'blog_categories';
public $timestamps = false;
protected $fillable = [ 'Section', 'Language' ];
}
