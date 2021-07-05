<?php

use Illuminate\Database\Seeder;
//Specifico l'uso del model Category
use App\Category;

//Specifichiamo l'uso della funzione Str per creare lo slug
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Antipasti',
                'img' => 'posts-cover/antipasti.png'
            ],
            [
                'name' => 'Insalate',
                'img' => 'posts-cover/insalate.png'
            ],
            [
                'name' => 'Primi Piatti',
                'img' => 'posts-cover/primi.png'
            ],
            [
                'name' => 'Secondi Piatti',
                'img' => 'posts-cover/secondi.png'
            ],
            [
                'name' => 'Contorni',
                'img' => 'posts-cover/contorni.png'
            ],
            [
                'name' => 'Dessert',
                'img' => 'posts-cover/dessert.png'
            ]
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->img_path = $category['img'];
            $newCategory->slug = Str::slug($newCategory->name, '-');
            $newCategory->save();
        }
    }
}
