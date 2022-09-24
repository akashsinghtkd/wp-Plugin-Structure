<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term_relationship extends Eloquent
{

    function __construct($table = 'term_relationships')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
