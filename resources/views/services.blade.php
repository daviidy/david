@extends('layouts.menu')

@section('content')

<!-- start banner Area -->
<section class="about-banner">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Services
        </h1>
        <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Services</a></p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
  <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content  col-lg-7">
                  <div class="title text-center">
                      <h1 class="mb-10">Mes services</h1>
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
      <div class="col-lg-4 col-md-6">
        <div class="single-services">
          <span class="lnr lnr-picture"></span>
          <a href="#"><h4>Conseil de carrière</h4></a>
          <p>
            Pour tous ceux qui ne savent pas où s'orienter dans ce vaste domaine qu'est le web
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services">
          <span class="lnr lnr-user"></span>
          <a href="#"><h4>Enseignement</h4></a>
          <p>
            Séminaires, conférences, cours en classe....embauchez-moi pour enseigner à vos événements.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-services">
          <span class="lnr lnr-earth"></span>
          <a href="#"><h4>Référencement</h4></a>
          <p>
            Pour permettre à vos sites web d'être en pôle position dans les résultats des moteurs de recherche comme Google.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End services Area -->

@endsection
