<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Option extends Eloquent
{

    function __construct($table = 'options')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
