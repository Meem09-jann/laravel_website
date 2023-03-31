<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Blog;
use App\Models\Blog\Category;
// use App\Models\Blog\Blog;
// use App\Models\Blog\Blog;

class Blog extends Model
{
   protected $table ='blogs';
   protected $fillable=['id','title','blogSlug','intro','coverImage','tag','writer','details'];
   public $timestamps= false;


   public function writer()
   {
      return $this->belongsTo(Writer::class);
   }
   
   public function categories()
   {
      return $this->belongsToMany(Category::class);
   }

   public function tags()
   {
      return $this->belongsToMany(Tag::class);
   }

   public function comments()
   {
   return $this->hasMany(Comment::class);
   }
}
