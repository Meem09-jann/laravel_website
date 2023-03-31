<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends  Authenticatable
{
    protected $table ='admins';
    protected $fillable=['id','name','email','password'];
    public $timestamps= false;
}
