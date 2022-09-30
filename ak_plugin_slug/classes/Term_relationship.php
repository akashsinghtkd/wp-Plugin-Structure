<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term_relationship extends Eloquent
{

    function __construct($table = '')
    {
        global $table_prefix;
        $this->table = $table_prefix . 'term_relationships';
    }
    public function term_taxonomy()
    {
        return $this->belongsTo(Term_taxonomy::class, 'term_taxonomy_id', 'term_taxonomy_id', $this->table);
    }
}
