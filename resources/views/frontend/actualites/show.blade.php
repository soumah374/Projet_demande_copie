@extends('layout.front')
@section('contenu')
<div class="page-title animatedBackground">
    <div class="container">
        <h3>Actualités</h3>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li class="dot-divider"></li>
            <li>Actualités</li>
        </ul>
    </div>
</div>
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    <div class="thumb">
                        <img src="{{asset('img/actualites/'.$actualite->image)}}" alt="details">
                        <?php
                            $dateActualite=$actualite->created_at;
                            $dateA=strtotime($dateActualite);
                          ?>
                        <div class="date">
                            <span>{{substr($dateActualite, 8, 2)}} <?php echo date("M", $dateA)." ".substr($dateActualite, 0, 4);?> </span>
                        </div>
                    </div>

                    <div class="blog-details-heading">
                        <h3>{{$actualite->titre}}</h3>
                    </div>

                    <div class="blog-details-content">
                        <p>
                            {{$actualite->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">
                    <div class="widget-box recent-post-box mb-0">
                        <h3 class="title">Actualités récentes</h3>
                        <ul>
                            @foreach($actualites as $actualit)
                            <li>
                                <div class="recent-post-thumb">
                                    <a href="{{route('front.actualites.show',$actualit->id)}}"><img src="{{asset('img/actualites/'.$actualit->image)}}" alt="pic"></a>
                                </div>

                                <div class="recent-post-desc">
                                    <h3><a href="{{route('front.actualites.show',$actualit->id)}}">{{$actualit->titre}}</a></h3>
                                    <span class="date">{{$actualit->created_at}}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection