@extends('layouts.menu') @section('content')

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6>C'est moi</h6>
                <h1>David YAO</h1>
                <p>
                    Je suis un développeur intermédiaire de Laravel et React JS avec une vaste expérience dans la construction de haut des sites de qualité. <br> Mes expériences vont de la création de sites mobiles réactifs qui fonctionnent bien entre
                    navigateurs. à la construction de sites évolutifs pour le secteur de l'éducation et du commerce électronique.<br> J'aime travailler sur des projets avec une équipe soucieuse de créer de belles interfaces utilisables. Il est important
                    pour moi de construire des relations à long terme avec les clients, Je recherche donc principalement des projets à long terme.
                </p>
                <a href="#" class="primary-btn text-uppercase">En savoir plus</a>
            </div>
            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                <img class="img-fluid" src="/personal/img/dave-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area pt-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 home-about-left">
                <img style="border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="img-fluid" src="/personal/img/about-dave.jpeg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 home-about-right">
                <h6>A propos</h6>
                <h1 class="text-uppercase">Développeur web</h1>
                <p>
                    Je suis David YAO, développeur web, formateur et blogueur depuis plus de 3 ans. J'ai réalisé de nombreuses applications web pour des clients et travaillé pour des entreprises telles que Huawei Technologies et Orange. Aujourd'hui, je dirige une entreprise
                    de conception de logiciels, <a href="http://rikudotech.com" target="_blank">Rikudo Technologies</a> qui génère des milliers de revenus par mois, et je partage mon expertise sur:
                    <ul>
                        <li>- <a href="https://oschool.ci" target="_blank">Oschool</a>, une plateforme de formation en ligne </li>
                        <li>- Open Classrooms en tant que mentor</li>
                        <li>- Udemy en tant que formateur</li>
                    </ul>
                </p>
                <a href="#" class="primary-btn text-uppercase">En savoir plus</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content  col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">Ce que je peux faire pour vous</h1>
                    <p>En fait, c'est simple. Le mieux que je puisse faire pour vous, c'est vous aider <br> Voici comment </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <span class="lnr lnr-pie-chart"></span>
                    <a href="#"><h4>Web Design</h4></a>
                    <p>
                        Je vous propose des designs simples et adaptés à vos besoins
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <span class="lnr lnr-laptop-phone"></span>
                    <a href="#"><h4>Développement Web et Mobile</h4></a>
                    <p>
                        Je concois des sites et applications web pour les besoins de votre business
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <span class="lnr lnr-rocket"></span>
                    <a href="#"><h4>Coaching</h4></a>
                    <p>
                        Vous voulez apprendre à coder avec moi ?
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End services Area -->

<!-- Start fact Area -->
<section class="facts-area section-gap" id="facts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">25</h1>
                <p>Projets accomplis</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">320</h1>
                <p>Clients satisfaits</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">8</h1>
                <p>Formations</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">500</h1>
                <p>Visites par mois sur mon blog</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->

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

<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Ce qu'ils pensent de mon travail</h1>
                    <p>Et pourquoi vous devez travailler avec moi</p>
                </div>
            </div>
        </div>
        <div class="row">
            <img class="img-fluid" src="/personal/img/elements/testimonials.gif" alt="" style="width: 73%; margin: auto; margin-top: 0px;">
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start recent-blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Meilleurs articles de mon blog</h1>
                <p>
                    Pour les plus curieux, voici de quoi je parle sur mon blog.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="/personal/img/blog/money.png" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img width="30" class="img-fluid" src="/personal/img/dave-img.png" alt="">
                        <a href="#"><span>David YAO</span></a>
                    </div>

                </div>
                <a href="http://deviens-developpeur.com/comment-gagner-argent-developpeur-web/" target="_blank">
                    <h4>Comment un développeur Web peut-il gagner de l’argent ?</h4>
                </a>
                <p>
                    La première chose à garder à l'esprit est que gagner de l'argent n'est pas facile. Et il n'y a pas…
                </p>
            </div>
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="/personal/img/blog/dev.png" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img width="30" class="img-fluid" src="/personal/img/dave-img.png" alt="">
                        <a href="#"><span>David YAO</span></a>
                    </div>
                </div>
                <a href="http://deviens-developpeur.com/raisons-devenir-developpeur-web-en-2018/" target="_blank">
                    <h4>10 raisons de devenir developpeur web en 2018</h4>
                </a>
                <p>
                    Salut la #davidnation Aujourd'hui, je vais être direct avec tous ceux qui hésitent à se lancer dans la programmation web,…
                </p>
            </div>
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="/personal/img/blog/femme.png" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img width="30" class="img-fluid" src="/personal/img/dave-img.png" alt="">
                        <a href="#"><span>David YAO</span></a>
                    </div>
                </div>
                <a href="http://deviens-developpeur.com/pourquoi-les-femmes-ne-devraient-pas-craindre-la-programmation/" target="_blank">
                    <h4>Pourquoi les femmes ne devraient pas craindre la programmation</h4>
                </a>
                <p>Si je vous disais ces deux mots: femme et développement web, qu’en penseriez vous? Beaucoup d’entre vous diraient que ce sont deux mots qui ne peuvent pas se retrouver dans la même phrase...
                </p>
            </div>


        </div>
    </div>
</section>
<!-- end recent-blog Area -->

@endsection
