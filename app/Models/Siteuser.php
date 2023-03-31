<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteuser extends Model
{
    protected $table ='site_user';
    protected $fillable=['id','name','email','solution'];
    public $timestamps= false;
}
