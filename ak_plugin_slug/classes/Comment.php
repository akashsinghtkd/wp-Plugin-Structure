<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{

    function __construct($table = 'comments')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
