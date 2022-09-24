<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term_taxonomy extends Eloquent
{

    function __construct($table = 'term_taxonomy')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
