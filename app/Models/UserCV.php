<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCV extends Model
{
    protected $table ='user_cv';
    protected $fillable=['id','name','email','post','cv_url'];
    public $timestamps= false;
}
