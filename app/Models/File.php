<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class File extends Model
{
   protected $table = 'files'; 
   public $timestamps = false;
    //User->userType->role
    //protected $table = 'blog_table';
    // protected $fillable = ['Author'];
}
