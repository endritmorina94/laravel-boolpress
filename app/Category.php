<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Specifico quali sono le colonne che possono essere modificate in automatico con la funzione fill()
    protected $fillable = [
       'name',
       'slug'
    ];

    //RELAZIONE TRA TABELLE (ONE TO MANY in questo caso)
    //Ogni categoria può avere più post correlati
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
