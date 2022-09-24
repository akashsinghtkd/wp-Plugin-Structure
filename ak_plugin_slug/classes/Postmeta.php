<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Postmeta extends Eloquent
{
    function __construct($table = 'postmeta')
    {
        global $table_prefix;
        $this->table = $table_prefix . $table;
    }   
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'ID', $this->table);
    }
}
