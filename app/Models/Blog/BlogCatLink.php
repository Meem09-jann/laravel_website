<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCatLink extends Model
{
    protected $table ='blog_category';
    // protected $fillable=['id','blogId','categoryId'];
       public $timestamps= false;

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
