<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'author', 'price', 'image', 'description', 'category_id'];

    public function category(): BelogsTo
    {
        return $this->belongsTo(Category::class);
    }
}
