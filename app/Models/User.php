<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable;
class User extends Authenticatable
{
    protected $table ='user';
    protected $fillable=['id','fname','lname','username','pass','user_type','signup_date'];
    public $timestamps= false;
}
