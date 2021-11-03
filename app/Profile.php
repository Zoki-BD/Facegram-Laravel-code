<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = []; //za da ne ni bara fillable pri submit za sekoe pole


    //metod koj ke vrakja ili default ili image-logo odbrano od userot
    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/storage/profile/noimage.jpg';
    }



    //za da se napravi one to one relationship pomegju tabelite profiles i users
   public function user()
   {
       return $this->belongsTo(User::class);
   }

   //za many to many vo pivot tabelata
    public function followers()
    {
        return $this->belongsToMany(User::class);
   }


}
