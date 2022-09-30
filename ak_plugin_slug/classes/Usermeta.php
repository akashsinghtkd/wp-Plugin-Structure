<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Usermeta extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
       $this->table = $table_prefix .'usermeta';
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id ', 'ID', $this->table);
    }
    
}
