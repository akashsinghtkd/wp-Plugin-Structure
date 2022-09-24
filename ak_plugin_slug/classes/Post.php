<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{

    function __construct($table = 'posts')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }

    public function postmeta()
    {
        return $this->hasMany(Postmeta::class, 'post_id', 'ID', $this->table);
    }
}
