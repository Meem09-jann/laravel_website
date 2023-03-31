<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public $table ='portfolio';
    protected $fillable=['id','title','client_name','platform','used_technology','product_description','product_description','img_url'];
    public $timestamps= false;
}
