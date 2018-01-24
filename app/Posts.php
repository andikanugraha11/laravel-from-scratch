<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //Tbale name
    protected $table = 'posts';

    // Primary key
    public $primaryKey = 'id';

    // timestamp
    public $timestamps = true;

}
