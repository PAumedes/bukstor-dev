<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'cost', 'price', 'description', 'isbn', 'author_id', 'category_id'];
    protected $dates = ['deleted_at'];
}
