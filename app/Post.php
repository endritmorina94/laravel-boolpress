<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Specifico quali sono le colonne che possono essere modificate in automatico con la funzione fill()
    protected $fillable = [
       'title',
       'content',
       'slug'
    ];

    //RELAZIONE TRA TABELLE (ONE TO MANY in questo caso)
    //Ogni post ha solo una categoria
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
