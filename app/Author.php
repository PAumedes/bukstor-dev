<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'last_name'];

    public function getAuthorFullName()
    {
        return $this->name . ' ' . $this->last_name;
    }
}
