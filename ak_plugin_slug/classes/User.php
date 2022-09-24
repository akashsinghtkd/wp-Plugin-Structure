<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{

    function __construct($table = 'users')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }

    /*
    * Get Todo of User
    */
    public function todo()
    {
        return $this->hasMany('Todo');
    }
}
