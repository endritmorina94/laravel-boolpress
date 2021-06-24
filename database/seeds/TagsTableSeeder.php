<?php

use Illuminate\Database\Seeder;
//Specifico l'uso del model Tag
use App\Tag;

//Specifichiamo l'uso della funzione Str per creare lo slug
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Primi Piatti',
            'Ricetta della nonna',
            'Vegani',
            'Gluten Free'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($newTag->name, '-');
            $newTag->save();
        }
    }
}
