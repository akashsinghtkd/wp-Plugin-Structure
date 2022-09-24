<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{

    function __construct($table = 'posts')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
