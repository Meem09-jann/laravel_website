<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Blog;


class Comment extends Model
{
      // protected $table ='comments';
      protected $fillable=['id','name','email','subject','website','body'];
      public $timestamps= false;

      public function blog(){
            return $this->belongsTo(Blog::class);
      }
      
}
