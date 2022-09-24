<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Termmeta extends Eloquent
{

    function __construct($table = 'termmeta')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }
    
}
