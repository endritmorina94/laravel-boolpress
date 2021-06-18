<?php

use Illuminate\Database\Seeder;
//Specifico l'uso del Faker e del model Post
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //Chiamo la funzione run con i parametri di Faker e la faccio giriare
     //Quante volte ho bisogno con un for popolando tutte le colonne che voglio/devo
     public function run(Faker $faker)
     {
        for ($i = 0; $i < 10; $i++){
        $newPost = new Post();
        $newPost->title = $faker->words(4, true);
        $newPost->content = $faker->paragraphs(4, true);
        //Questa funzione formatterà in automatico il title renendolo uno slug
        $newPost->slug = Str::slug($newPost->title, '-');
        $newPost->save();
        }
     }
}
