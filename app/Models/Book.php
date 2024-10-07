<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description' ,'is_available'];

    
    public function categories()
{
    return $this->belongsToMany(Category::class, 'category_book');
}

}
