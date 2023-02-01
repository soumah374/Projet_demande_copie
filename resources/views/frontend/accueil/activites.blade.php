
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Dernières activités</h3>
            <a href="{{route('front.activites.index')}}" class="read-more-btn">Voir plus.</a>
        </div>
                
        <div class="row">
            <div class="blog-slider owl-carousel owl-theme">
                @foreach($activites as $activite)
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="{{route('front.activites.show',$activite->id)}}" class="blog-image"><img src="{{asset('img/activites/'.$activite->images)}}" alt="blog"></a>
                        <div class="blog-post-content">
                            <span>{{$activite->created_at}}</span>
                            <h4><a href="{{route('front.activites.show',$activite->id)}}">{{$activite->titre}}</a></h4>
                            <p> 
                                @if(strlen($activite->description)<200)
                                    {{$activite->description}}
                                    @else
                                    <?php
                                        echo substr(strip_tags($activite->description), 0, 200).'...';
                                    ?>
                                @endif
                            </p>
                            <a href="{{route('front.activites.show',$activite->id)}}" class="read-more-btn">Lire la suite</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
