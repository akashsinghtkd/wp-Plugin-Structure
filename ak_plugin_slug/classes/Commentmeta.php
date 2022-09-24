<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Commentmeta extends Eloquent
{

    function __construct($table = 'commentmeta')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
