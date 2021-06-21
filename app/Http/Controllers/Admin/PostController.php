<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Specifichiamo l'uso del Model Post
use App\Post;
//Specifichiamo l'uso della funzione Str per creare lo slug
use Illuminate\Support\Str;


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
        return view('admin.posts.create');
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
        $request->validate([
           'title' => 'required|min:3|max:255',
           'content' => 'required|max:65000'
        ]);

        //Una volta validati li valorizziamo in una variabile
        $form_data = $request->all();

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

        //Con la funzione fill passiamo i dati della variabile form_data al nostro nuovo oggetto Post
        //ATTENZIONE: ricordati di specificare nel Model quali sono i dati che possono essere "fillati"
        $post->fill($form_data);
        //Con la funzione save() salviamo
        $post->save();

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
            'post' => $post
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
