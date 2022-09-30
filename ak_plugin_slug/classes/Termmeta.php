<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Termmeta extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'termmeta';
    }
    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id ', 'term_id', $this->table);
    }
    
}
