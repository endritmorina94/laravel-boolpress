@extends('layouts.app')

@section('page_title', "GialloBooleano")

@section('content')


    <div class="container">
        <div class="home-page">
            {{-- Suggested Recipes Start --}}
            <div class="section-title">
                <h2>Ricette Consigliate</h2>
            </div>
            <div class="suggested-posts d-flex justify-content-between">
                <div class="post">
                    <div class="category">
                       Primi piatti
                    </div>
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-numbers">
                            <span><i class="far fa-clock"></i> Hours</span>
                            <span><i class="fas fa-users"></i> People</span>
                        </div>
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="category">
                       Primi piatti
                    </div>
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-numbers">
                            <span><i class="far fa-clock"></i> Hours</span>
                            <span><i class="fas fa-users"></i> People</span>
                        </div>
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="category">
                       Primi piatti
                    </div>
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-numbers">
                            <span><i class="far fa-clock"></i> Hours</span>
                            <span><i class="fas fa-users"></i> People</span>
                        </div>
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>

                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="category">
                       Primi piatti
                    </div>
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-numbers">
                            <span><i class="far fa-clock"></i> Hours</span>
                            <span><i class="fas fa-users"></i> People</span>
                        </div>
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Suggested Recipes End --}}

            {{-- Recent Recipes Start --}}
            <div class="section-title">
                <h2>Ricette Recenti</h2>
            </div>
            <div class="latest-posts d-flex justify-content-between">
                <div class="post">
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>
                        </div>
                    </div>
                </div>

                <div class="post">
                    <div class="image-container">
                        <img src="https://webalvolo.it/wp-content/uploads/2020/03/cosa-significa-foodporn-1024x660.png" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <h5>Recipe Name</h4>
                            <p>description</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Recent Recipes End --}}
        </div>
    </div>




        {{-- <div class="mt-3">
            @foreach ($categories as $category)
                <a href="{{ route('category-page', ['slug' => $category->slug])}}">
                    <h3>{{ $category->name }}</h3>
                </a>
            @endforeach
        </div> --}}

    <section class="parallax container-fluid">
        <div class="container">
            <div class="section-title">
                <h2>Categorie</h2>
            </div>

            <div class="categories">
                <div class="category">
                    <h3>Primi Piatti</h3>
                    <img src="{{ asset('img/primi.png') }}" alt="">
                </div>
                <div class="category">
                    <h3>Secondi Piatti</h3>
                    <img src="{{ asset('img/secondi.png') }}" alt="">
                </div>
                <div class="category">
                    <h3>Contorni</h3>
                    <img src="{{ asset('img/contorni.png') }}" alt="">
                </div>
                <div class="category">
                    <h3>Dessert</h3>
                    <img src="{{ asset('img/dessert.png') }}" alt="">
                </div>

            </div>

        </div>

    </section>
@endsection
