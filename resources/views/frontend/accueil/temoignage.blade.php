<section class="testimonial-area ptb-100 bg-fbf9f8">
    <div class="container">
        <div class="section-title">
            <h3>Nos temoignages</h3>   
        </div>
        <div class="row">
            <div class="feedback-slides owl-carousel owl-theme">
                @foreach($temoignages as $temoignange)
                <div class="col-lg-12 col-md-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <div class="img">
                                 <img src="{{asset('img/temoignages/'.$temoignange->image)}}" class="img-responsive"  alt="{{$temoignange->nom_prenom}}">
                             </div>
                             <h4>{{$temoignange->nom_prenom}}</h4>
                        </div>
                        <br>
                        <p>
                            {{$temoignange->description}}
                            
                        </p>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
            
</section>