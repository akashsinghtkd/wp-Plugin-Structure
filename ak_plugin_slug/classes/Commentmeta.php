<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Commentmeta extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix . 'commentmeta';
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'comment_ID', $this->table);
    }
}
