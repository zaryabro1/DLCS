<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class Link extends Model
{
   protected $table = 'links'; 
   public $timestamps = false;
    //User->userType->role
    //protected $table = 'blog_table';
    // protected $fillable = ['Author'];

    public function link()
    {
        return $this->belongsTo(User_Profile::class);
    }
}
