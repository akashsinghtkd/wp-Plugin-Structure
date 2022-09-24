<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends Eloquent
{

    function __construct($table = 'terms')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
