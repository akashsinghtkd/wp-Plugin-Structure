<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix . 'comments';
    }
    public function commentmeta()
    {
        return $this->hasMany(Commentmeta::class, 'comment_id', 'comment_ID', $this->table);
    }
}
