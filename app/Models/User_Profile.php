<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class User_profile extends Model
{
   protected $table = 'user_profile'; 
   public $timestamps = false;

   public function Links(){
       return $this->hasMany(Link::class, 'user_id', 'user_id');
   }

   public function Files(){
       return $this->hasMany(File::class, "user_id", "user_id");
   }
    //User->userType->role
    //protected $table = 'blog_table';
    // protected $fillable = ['Author'];
}
