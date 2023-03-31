<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Blog\Blog;

class Writer extends  Authenticatable
{
  // protected $table ='writers';
  protected $fillable=['id','lastName','name','email','password'];
  public $timestamps= false;


  public function blogs(){
      return $this->hasMany(Blog::class);
  }
}
