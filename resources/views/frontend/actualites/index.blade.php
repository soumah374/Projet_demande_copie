@extends('layout.front')
@section('contenu')
<div class="page-title animatedBackground">
    <div class="container">
        <h3>Actualites</h3>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li class="dot-divider"></li>
            <li>Actualites</li>
        </ul>
    </div>
</div>

<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach($actualites as $actualite)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-blog-post">
                                <a href="{{route('front.actualites.show',$actualite->id)}}" class="blog-image"><img src="{{asset('img/actualites/'.$actualite->image)}}" alt="blog"></a>
                                <div class="blog-post-content">
                                    <span>{{$actualite->created_at}}</span>
                                    <h4><a href="#">{{$actualite->titre}}</a></h4>
                                    <p> 
                                @if(strlen($actualite->description)<200)
                                    {{$actualite->description}}
                                    @else
                                    <?php
                                        echo substr(strip_tags($actualite->description), 0, 200).'...';
                                    ?>
                                @endif
                            </p>
                                    <a href="{{route('front.actualites.show',$actualite->id)}}" class="read-more-btn">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <nav aria-label="navigation">
                                {{$actualites->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection