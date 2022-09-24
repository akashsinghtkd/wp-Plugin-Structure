<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Postmeta extends Eloquent
{

    function __construct($table = 'postmeta')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
