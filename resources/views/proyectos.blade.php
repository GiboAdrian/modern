@extends('layouts.layout')

@section('title', 'Proyectos')

@section('proyectos_menu', 'active')

@section('content')

    <div class="content-video">
        
    </div>

    <section class="container-fluid content">
        <div class="content-proyectos">
            <!-- Categorías -->
            <div class="row justify-content-center">
                <div class="col-10 col-md-12">
                    <nav class="text-center my-5">
                        <a href="/proyectos" class="mx-3 pb-3 link-category d-block d-md-inline {{ isset($categoryIdSelected)? '': 'selected-category' }}" >Todas</a>
                        @foreach ($categories as $category)
                            <a href="{{route('proyectos.category', $category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category': '' }}" >{{$category->name}}</a>
                        @endforeach
                    </nav>
                </div>
            </div>

            <!-- Posts -->
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                <div class="card-deck">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->title}}">
                                        <div class="card-body">
                                            <small class="card-txt-category">Categoría: {{$post->category->name}}</small>
                                            <h5 class="card-title my-2">{{$post->title}}</h5>
                                            <div class="d-card-text">
                                                {{$post->content}}
                                            </div>
                                            <a href="{{route('proyecto', $post->id)}}" class="post-link"><b>Leer más</b></a>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    <span class="card-txt-author">{{$post->author}}</span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @for ($i = 0; $i < 2; $i++)
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum atque in odit quas? Dolorem nostrum ducimus eveniet. Voluptas explicabo numquam laboriosam? Eum atque quam aliquam mollitia laborum, quae nam architecto.</p>
                        @endfor
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, ab sit praesentium doloremque eius maiores magni exercitationem nobis saepe vitae delectus nam harum doloribus aliquid! Impedit eveniet eaque commodi mollitia?
                    Molestiae, dolores. Aperiam quaerat ullam quo quibusdam maxime magnam ducimus nemo, obcaecati recusandae quia explicabo quos eum animi libero iure mollitia accusamus asperiores facere pariatur quod inventore temporibus. Temporibus, animi.
                    Laudantium repellendus magni dolore doloremque sequi! Nisi eum quo et laudantium necessitatibus itaque animi voluptates, dolores sint blanditiis corporis repellendus inventore minima ipsam, laboriosam ad nesciunt facilis, architecto earum perferendis!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, ab eius voluptate culpa quo commodi incidunt blanditiis qui ratione esse exercitationem libero officiis atque similique maxime eligendi amet suscipit cumque.
                    Laudantium optio fuga consequatur inventore, tempora cum ipsa voluptas placeat eum soluta velit omnis commodi error! Repellendus, reiciendis dicta a voluptatem perspiciatis illo architecto officia ipsum dolores velit excepturi! Iure?
                    Voluptates porro ducimus totam atque beatae. Commodi quae error saepe quod deleniti libero ipsa quibusdam nemo impedit. Sunt inventore labore quod fugiat eos? Voluptatem est veniam in architecto, fuga unde!
                    Blanditiis, consequuntur amet beatae, fugiat, ducimus omnis modi aperiam voluptates sunt libero ut! Eaque minus ut debitis vitae magni? Fugit assumenda dolor molestias facere ipsam placeat, repellat nihil accusamus eligendi.
                    Quidem eum consectetur cumque quaerat quia quae mollitia ullam pariatur ad voluptate ea magni, accusantium repudiandae? Modi earum laboriosam accusamus possimus illo ab quod repudiandae perspiciatis, sapiente debitis? Libero, odit!
                    Necessitatibus autem ab exercitationem omnis, quia hic assumenda voluptatibus consectetur rerum. Debitis reiciendis recusandae amet voluptas itaque optio, repellat accusantium quia, corrupti sunt culpa dicta aspernatur eos magni, autem officiis.</p>
                </div>

                <div class="col-12">
                    <!-- Paginador -->

                </div>
            </div>
        </div>        
    </section>
@endsection

