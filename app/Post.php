<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = []; //za da ne ni bara fillable pri submit za sekoe pole

    public function user()
    {
        return $this->belongsTo(User::class);

    }



}


