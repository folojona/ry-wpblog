<?php

namespace Ry\Wpblog\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    
    protected $connection = "wpblog";
}
