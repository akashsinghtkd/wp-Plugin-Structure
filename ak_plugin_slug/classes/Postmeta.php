<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Postmeta extends Eloquent
{
    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'postmeta';
    }   
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'ID', $this->table);
    }
}
