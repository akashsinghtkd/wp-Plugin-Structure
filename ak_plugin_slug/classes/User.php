<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
     $this->table = $table_prefix .'users';
     
    }

    /*
    * Get Todo of User
    */
    public function todo()
    {
        return $this->hasMany('Todo');
    }
    public function usermeta()
    {
        return $this->hasMany(Usermeta::class, 'user_id', 'ID', $this->table);
    }
}
