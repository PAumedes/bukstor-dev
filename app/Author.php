<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    // protected $table = 'authors';
    protected $fillable = ['name', 'last_name'];
    protected $dates = ['deleted_at'];

    public function getAuthorFullName()
    {
        return $this->name . ' ' . $this->last_name;
    }

    // public function book()
    // {
    //     return $this->hasMany(Book::class);
    // }
}
