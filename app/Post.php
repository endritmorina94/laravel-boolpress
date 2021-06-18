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
}
