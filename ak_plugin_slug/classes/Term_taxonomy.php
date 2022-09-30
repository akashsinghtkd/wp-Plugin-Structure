<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term_taxonomy extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'term_taxonomy';
    }
    public function term_relationship()
    {
        return $this->hasMany(Term_relationship::class, 'term_taxonomy_id', 'term_taxonomy_id', $this->table);
    }
}
