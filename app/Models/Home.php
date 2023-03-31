<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table ='home';
    protected $fillable=['id','title','title_text','video_title','video_text','video_url'];
    public $timestamps= false;
}
