<?php


namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Blog;


class Tag extends Model
{
    protected $fillable=['id','tagName','tagSlug'];
    public $timestamps= false;

    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }
}
