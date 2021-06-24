<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
       'name',
       'slug'
    ];
    
    //RELAZIONE TRA TABELLE (MANY TO MANY in questo caso)
    //Ogni tag può avere più post
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
}
