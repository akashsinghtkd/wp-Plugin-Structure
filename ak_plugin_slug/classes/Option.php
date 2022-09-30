<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Option extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'options';
    }
    
}
