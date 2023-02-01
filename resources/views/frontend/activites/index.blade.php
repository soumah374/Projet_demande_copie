@extends('layout.front')
@section('contenu')
<div class="page-title animatedBackground">
    <div class="container">
        <h3>Activités</h3>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li class="dot-divider"></li>
            <li>Activités</li>
        </ul>
    </div>
</div>

<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach($activites as $activite)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-blog-post">
                                <a href="{{route('front.activites.show',$activite->id)}}" class="blog-image"><img src="{{asset('img/activites/'.$activite->images)}}" alt="blog"></a>
                                <div class="blog-post-content">
                                    <span>{{$activite->created_at}}</span>
                                    <h4><a href="#">{{$activite->titre}}</a></h4>
                                    <p> 
                                @if(strlen($activite->description)<200)
                                    {{$activite->description}}
                                    @else
                                    <?php
                                        echo substr(strip_tags($activite->description), 0, 200).'...';
                                    ?>
                                @endif
                            </p>
                                    <a href="{{route('front.activites.show',$activite->id)}}" class="read-more-btn">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <nav aria-label="navigation">
                                {{$activites->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection