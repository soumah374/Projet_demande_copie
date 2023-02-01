<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Dernières actualités</h3>
            <a href="{{route('front.actualites.index')}}" class="read-more-btn">Voir plus.</a>
        </div>
                
        <div class="row">
            <div class="blog-slider owl-carousel owl-theme">
                @foreach($actualites as $actualite)
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="{{route('front.actualites.show',$actualite->id)}}" class="blog-image"><img src="{{asset('img/actualites/'.$actualite->image)}}" alt="blog"></a>
                        <div class="blog-post-content">
                            <span>{{$actualite->created_at}}</span>
                            <h4><a href="{{route('front.actualites.show',$actualite->id)}}">{{$actualite->titre}}</a></h4>
                            <p> 
                                @if(strlen($actualite->description)<200)
                                    {{$actualite->description}}
                                    @else
                                    <?php
                                        echo substr(strip_tags($actualite->description), 0, 200).'...';
                                    ?>
                                @endif
                            </p>
                            <a href="{{route('front.actualites.show',$actualite->id)}}" class="read-more-btn">Lire la suite</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>