<?php


namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Blog;
use App\Models\Blog\Tag;

class Blog_Tag extends Model
{
    protected $table ='blog_tag';
    protected $fillable=['id','blog_id','tag_id'];
    public $timestamps= false;


    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
