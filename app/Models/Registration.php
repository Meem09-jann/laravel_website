<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Registration extends Model
{ 
    protected $table ='registrations';
    protected $fillable=['reg_id','first_name','last_name','email','phone','address','occupation','institute_name','previous_experience','purpose','current_use','created_at_mil'];
     public $timestamps= false;
}
