<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'cost', 'price', 'description', 'isbn', 'author_id', 'category_id'];
    protected $dates = ['deleted_at'];

    // public function authors()
    // {
    //     return $this->belongsTo('App\Author', 'author_id');
    // }

    // public function categories()
    // {
    //     return $this->belongsTo('App\Category', 'category_id');
    // }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault();
    }
}
