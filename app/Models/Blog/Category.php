<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Blog;
// use App\Models\Blog\Blog;
// use App\Models\Blog\Blog;

class Category extends Model
{
    protected $table ='categories';
    protected $fillable=['id','categoryName','categorySlug'];
    public $timestamps= false;

    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }
}
