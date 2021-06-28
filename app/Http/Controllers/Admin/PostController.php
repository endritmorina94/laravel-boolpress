<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Specifichiamo l'uso del model Post e del model Category
use App\Post;
use App\Category;
use App\Tag;
//Specifichiamo l'uso della funzione Str per creare lo slug
use Illuminate\Support\Str;
//Specifichiamo l'uso della funzione Storage per inserire file nel DB
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        $data = [
            'posts' => $posts
        ];

        return view('admin.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        $data = [
            'categories' => $categories,
            'tags' => $tags
        ];

        return view('admin.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Valido i dati
        $request->validate($this->getValidationRules());

        //Una volta validati li valorizziamo in una variabile
        $form_data = $request->all();

        // dd($form_data);

        //Dichiariamo una nuova istanza Post
        $post = new Post();

        //Creiamo uno slug controllando che non ce ne sia già uno uguale nel DB
        $new_slug = Str::slug($form_data['title'], '-');
        $slug_base = $new_slug;
        $existing_slug = Post::where('slug', '=', $new_slug)->first();
        $counter = 2;

        while ($existing_slug) {
            $new_slug = $slug_base . '-' . $counter;
            $counter++;
            $existing_slug = Post::where('slug', '=', $new_slug)->first();
        }

        $form_data['slug'] = $new_slug;

        //Se l'img_path esiste, allora con la funzione storage creo il path all'immagine
        if(isset($form_data['img_path'])){
            $img_path = Storage::put('posts-cover', $form_data['img_path']);

            //Se la variabile $img_path viene creata la imposto come valore di $form_data['img_path']
            if ($img_path) {
                $form_data['img_path'] = $img_path;
            }
        }

        //Con la funzione fill passiamo i dati della variabile form_data al nostro nuovo oggetto Post
        //ATTENZIONE: ricordati di specificare nel Model quali sono i dati che possono essere "fillati"
        $post->fill($form_data);
        //Con la funzione save() salviamo
        $post->save();

        //Controllo che l'array 'tags' ci sia e che sia effetivamente un array,
        //Se così, lo setto come tag o più tag al nuovo post
        if(isset($form_data['tags']) && is_array($form_data['tags'])){
            $post->tags()->attach($form_data['tags']);
        }

        //Reindirizziamo l'utente al nuovo fumetto appena inserito nel DB
        return redirect()->route('admin.posts.show', [
           'post' => $post->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'post' => $post,
            'category' => $post->category,
            'tags' =>$post->tags
        ];

        return view('admin.posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $categories = Category::all();

        $tags = Tag::all();

        $data = [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ];

        return view('admin.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Valido i dati
        $request->validate($this->getValidationRules());

        //Inserisco tutti i dati nella variabile form_data
        $form_data = $request->all();

        //Indico con una variabile il post da modificare
        $post_to_modify = Post::find($id);

        //Come default imposto lo slug del post nel DB all post modificato
        $form_data['slug'] = $post_to_modify->slug;

        //Creo lo slug controllando che non ne esista già uno uguale
        //Controllo quindi se il titolo del post modificato è stato modificato
        if($form_data['title'] != $post_to_modify->title){
            //Nel caso il titolo venga modificato....
            //Creiamo uno slug controllando che non ce ne sia già uno uguale nel DB
            $new_slug = Str::slug($form_data['title'], '-');
            $slug_base = $new_slug;
            $existing_slug = Post::where('slug', '=', $new_slug)->first();
            $counter = 2;

            while ($existing_slug) {
                $new_slug = $slug_base . '-' . $counter;
                $counter++;
                $existing_slug = Post::where('slug', '=', $new_slug)->first();
            }

            //Riassegno lo slug
            $form_data['slug'] = $new_slug;
        }

        //Se l'img_path esiste, allora con la funzione storage creo il path all'immagine
        if(isset($form_data['img_path'])){
            $img_path = Storage::put('posts-cover', $form_data['img_path']);

            //Se la variabile $img_path viene creata la imposto come valore di $form_data['img_path']
            if ($img_path) {
                $form_data['img_path'] = $img_path;
            }
        }

        //Con la funzione update() aggiorno tutti i dati, la funzione update() funziona come la funzione fill()
        $post_to_modify->update($form_data);


        //Controllo che l'array 'tags' ci sia e che sia effetivamente un array,
        //Se così, lo setto come tag o più tag al nuovo post. Altrimenti tolgo tutti i tag.
        if(isset($form_data['tags']) && is_array($form_data['tags'])){
            $post_to_modify->tags()->sync($form_data['tags']);
        } else {
            $post_to_modify->tags()->sync([]);
        }

        //Reindirizzo l'utente alla pagina del fumetto appena aggiornato/modificato
        return redirect()->route('admin.posts.show', ['post' => $post_to_modify->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_to_delete = Post::findOrFail($id);

        //Prima di eliminare il post, cancello le sue tag per evitare di avere collegamenti orfani
        //Nella tabella bridge post_tag
        $post_to_delete->tags()->sync([]);

        $post_to_delete->delete();

        //Faccio tornare l'utente alla Homepage
        return redirect()->route('admin.posts.index');
    }

    //Funzione di validazione dei dati
    private function getValidationRules() {
        return [
            'title' => 'required|min:3|max:255',
            'content' => 'required|max:65000',
            //category_id deve esistere nella tabella categories, nella collona id
            'category_id' => 'nullable|exists:categories,id',
            //tags devono esistere nella tabella tags, nella colonna id
            'tags' => 'nullable|exists:tags,id',
            'img_path' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp'
        ];
    }
}
