<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'posts';
    }

    public function postmeta()
    {
        return $this->hasMany(Postmeta::class, 'post_id', 'ID', $this->table);
    }
}
