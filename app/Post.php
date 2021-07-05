<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Specifico quali sono le colonne che possono essere modificate in automatico con la funzione fill()
    protected $fillable = [
       'title',
       'content',
       'slug',
       'category_id',
       'img_path',
       'cooking_time',
       'people'
    ];

    //RELAZIONE TRA TABELLE (ONE TO MANY in questo caso)
    //Ogni post ha solo una categoria
    public function category(){
        return $this->belongsTo('App\Category');
    }

    //RELAZIONE TRA TABELLE (MANY TO MANY in questo caso)
    //Ogni post può avere più tag
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
