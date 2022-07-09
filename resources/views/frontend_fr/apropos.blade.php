@extends('frontend_fr/include/layout')
@section('title') A Propos de nous @endsection
@section('contenu')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Qui sommes nous ?</h2>
      <ol>
        <li><a href="{{route('accueil')}}">Accueil</a></li>
        <li>A Propos</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- ======= About Us Section ======= -->
 <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Notre offre pricipale</h2>
            <h3>Nous offrons des prêts à toute personnes sérieuses dans le besoin</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              <b style="color: green;">Avez-vous besoin de financement pour régler n'imorte quel problème ?</b> 
              <br>Ne vous inquiétez pas, ne vous stressez pas. Nous sommes à votre service 24h/24 7jours/7 avec une équipe dévouée à vous satisfaire.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Être une personne de bonne moralité</li>
              <li><i class="ri-check-double-line"></i> Avoir l'âge de raison</li>
              <li><i class="ri-check-double-line"></i> Savoir respecter les textes</li>
            </ul>
            <p class="fst-italic">
              Avec nous, Vous aviez la certitude de recevoir  votre financement quelque soit le montant tant que vous y mettez du sérieux aussi.
            </p>
            <p>
              <a class="btn btn-success" href="{{route('contact')}}"> Faire une demande</a>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Our <strong>Notre équipe</strong></h2>
      <p>Nous disposons de plusieurs personnes dans notre équipe mais nous avions un des responsable qui veillent à ce que vous soyez satisfait par nos service. Voici quelques uns</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Hugo Meyer</h4>
            <span>Responsable clientèle</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Marie Lalune</h4>
            <span>Responsable Markéting</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Luc Salvio</h4>
            <span>responsable Hessources Humaines</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Felizia Napleo</h4>
            <span>Responsable Comptable</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Our Team Section -->



 <!-- ======= Our Clients Section ======= -->
 <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/italie-1.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/italie-2.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/italie-3.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/allemagne-1.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/allemagne-2.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/allemagne-3.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/france-1.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('theme/assets/img/clients/france-2.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

</main><!-- End #main -->
@endsection