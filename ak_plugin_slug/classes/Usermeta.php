<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Usermeta extends Eloquent
{

    function __construct($table = 'usermeta')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
