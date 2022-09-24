<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Link extends Eloquent
{

    function __construct($table = 'links')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
