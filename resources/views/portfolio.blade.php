@extends('layouts.menu')

@section('content')

<!-- start banner Area -->
<section class="about-banner">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Portfolio
        </h1>
        <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="portfolio.html"> Portfolio</a></p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Quelques uns de mes travaux</h1>
                    <p>Qui ont aidé de nombreuses personnes</p>
                </div>
            </div>
        </div>

        <div class="filters">
            <ul>
                <li class="active" data-filter="*">Tout</li>
                <li data-filter=".bootstrap">Bootstrap</li>
                <li data-filter=".laravel">Laravel</li>
                <li data-filter=".wordpress">Wordpress</li>
                <li data-filter=".design">Design</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row grid">
                <div class="single-portfolio col-sm-4 all wordpress">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/oschool.png" alt="">
                        </div>
                        <a href="/personal/img/oschool.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>oschool.ci</h4>
                        <div class="cat">wordpress</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laravel bootstrap">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/freelance.png" alt="">
                        </div>
                        <a href="/personal/img/freelance.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>freelance.oschool.ci</h4>
                        <div class="cat">laravel</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all wordpress">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/intra.png" alt="">
                        </div>
                        <a href="/personal/img/intra.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>

                    </div>
                    <div class="p-inner">
                        <h4>intra-etskokouservices.net</h4>
                        <div class="cat">wordpress</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laravel bootstrap">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/javascript.png" alt="">
                        </div>
                        <a href="/personal/img/javascript.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>javascript.oschool.ci</h4>
                        <div class="cat">laravel</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all wordpress">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/nm.png" alt="">
                        </div>
                        <a href="/personal/img/nm.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>nmtechnologie.com</h4>
                        <div class="cat">wordpress</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all wordpress design">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="/personal/img/rm.png" alt="">
                        </div>
                        <a href="/personal/img/rm.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="/personal/img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4>rikudomedia.com</h4>
                        <div class="cat">bootstrap</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End portfolio-area Area -->	

@endsection
