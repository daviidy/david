@extends('layouts.menu')

@section('content')

<!-- start banner Area -->
<section class="about-banner">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          A propos
        </h1>
        <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">A propos</a></p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img height="100" class="img-fluid" src="/personal/img/davefond.jpg" alt="">
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
      <div class="col-lg-12 pt-60">
        <p>
          Je maitrise la plupart des technologies web, front-end (HTML, CSS, JAVASCRIPT) et back-end (PHP, MYSQL, JAVA).
          J'utilise fréquemment les frameworks BOOTSTRAP, REACT et LARAVEL pour réaliser rapidement des application web.
          J'ai aussi une bonne maitrise de l'API REST pour permettre à vos applications d'utiliser les fonctionnalités de
          connexion avec les réseaux sociaux, ou de communiquer avec d'autres applications web.
        </p>
        <p>
          Je suis un amoureux de l'apprentissage et de l'auto-formation. En effet, j'aime apprendre de nouvelles choses
          et de nouvelles technologies. J'adore partager mes connaissances et apprendre des autres.
        </p>
        <h4 class="pt-30">Outils d'expertise</h4>
      </div>
    </div>
    <div class="row skillbar-wraps">
      <div class="col-lg-6 skill-left">
        <div class="single-skill">
          <p>
            React 65%
          </p>
          <div class="skill" data-width="85"></div>
        </div>
        <div class="single-skill">
          <p>
            Laravel 85%
          </p>
          <div class="skill" data-width="90"></div>
        </div>
        <div class="single-skill">
          <p>
            Bootstrap 90%
          </p>
          <div class="skill" data-width="70"></div>
        </div>
      </div>
      <div class="col-lg-6 skill-right">
        <div class="single-skill">
          <p>
            Github 95%
          </p>
          <div class="skill" data-width="95"></div>
        </div>
        <div class="single-skill">
          <p>
            Sketch 85%
          </p>
          <div class="skill" data-width="85"></div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End home-about Area -->

<!-- Start timeline Area -->
<section class="timeline pb-120">
      <div class="text-center">
          <div class="menu-content pb-70">
              <div class="title text-center">
                  <h1 class="mb-10">Mon parcours</h1>
                  <p>Voici mon parcours scolaire,universitaire et professionnel</p>
              </div>
          </div>
      </div>
  <ul>
    <li>
      <div class="content">
        <h4>
          <time>Certificat développeur web</time>
        </h4>
        <p><b>Ecole:</b> Codeschool</p>
        <p><b>Année:</b> 2016</p>
      </div>
    </li>
    <li>
      <div class="content">
        <img class="img-fluid mx-auto d-block mb-30" src="/personal/img/about/oschool.png" alt="">
        <h4>
          <time>Développeur web</time>
        </h4>
        <p><b>Entreprise:</b> Oschool</p>
        <p><b>Année:</b> 2016 - Présent</p>
      </div>
    </li>
    <li>
      <div class="content">
        <h4>
          <time>Licence professionnelle en Réseaux Télécommunications</time>
        </h4>
        <p><b>Ecole:</b> ESATIC</p>
        <p><b>Année:</b> 2015</p>
      </div>
    </li>
    <li>
      <div class="content">
        <img class="img-fluid mx-auto d-block mb-30" src="/personal/img/about/huawei.png" alt="">
        <h4>
          <time>Network engineer</time>
        </h4>
        <p><b>Entreprise:</b> Huawei Technologies</p>
        <p><b>Année:</b> 2015</p>
      </div>
    </li>
    <li>
      <div class="content">
        <h4>
          <time>BAC série D</time>
        </h4>
        <p><b>Ecole:</b> Lycée Classique Abidjan</p>
        <p><b>Année:</b> 2012</p>
      </div>
    </li>
  </ul>
</section>

<!-- End timeline Area -->


<!-- Start testimonial Area -->

<!--
  <section class="testimonial-area section-gap">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">Client’s Feedback About Me</h1>
                      <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="active-testimonial">
                  <div class="single-testimonial item d-flex flex-row">
                      <div class="thumb">
                          <img class="img-fluid" src="/personal/img/elements/user1.png" alt="">
                      </div>
                      <div class="desc">
                          <p>
                              Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                          </p>
                          <h4>Harriet Maxwell</h4>
                          <p>CEO at Google</p>
                      </div>
                  </div>
                  <div class="single-testimonial item d-flex flex-row">
                      <div class="thumb">
                          <img class="img-fluid" src="/personal/img/elements/user2.png" alt="">
                      </div>
                      <div class="desc">
                          <p>
                              A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                          </p>
                          <h4>Carolyn Craig</h4>
                          <p>CEO at Facebook</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

-->
  <!-- End testimonial Area -->

  <!-- Start brands Area -->
  <!--
  <section class="brands-area">
      <div class="container">
          <div class="brand-wrap">
              <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="/personal/img/l1.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="/personal/img/l2.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="/personal/img/l3.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="/personal/img/l4.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="/personal/img/l5.png" alt=""></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
-->
  <!-- End brands Area -->

@endsection
