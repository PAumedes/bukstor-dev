<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'cost', 'price', 'description', 'isbn', 'category_id', 'author_id'];
}
