<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends Eloquent
{

    function __construct()
    {
        global $table_prefix;
        $this->table = $table_prefix .'terms';
    }
    public function termmeta()
    {
        return $this->hasMany(Termmeta::class, 'term_id', 'term_id', $this->table);
    }
}
