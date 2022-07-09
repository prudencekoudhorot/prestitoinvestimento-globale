@extends('frontend_it/include/layout')
@section('title') A Propos de nous @endsection
@section('contenu')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Chi siamo noi ?</h2>
      <ol>
        <li><a href="{{route('accueil_it')}}">Pagina iniziale</a></li>
        <li>Chi siamo</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- ======= About Us Section ======= -->
 <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>La nostra offerta principale</h2>
            <h3>Offriamo prestiti a tutte le persone serie bisognose</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              <b style="color: green;">Hai bisogno di un finanziamento per risolvere qualche problema?</b> 
              <br>Non preoccuparti, non stressarti. Siamo al tuo servizio 24 ore su 24, 7 giorni su 7 con un team dedicato alla tua soddisfazione.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Sii una persona di buon carattere</li>
              <li><i class="ri-check-double-line"></i> Avere l'età della ragione</li>
              <li><i class="ri-check-double-line"></i> Saper rispettare i testi</li>
            </ul>
            <p class="fst-italic">
            Con noi avevi la certezza di ricevere il tuo finanziamento qualunque sia l'importo purché anche tu ci prendi sul serio.
            </p>
            <p>
              <a class="btn btn-success" href="{{route('contact_it')}}"> Per fare una richiesta</a>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2><strong>La nostra squadra</strong></h2>
      <p>Abbiamo diverse persone nel nostro team, ma abbiamo avuto uno dei manager che si assicura che tu sia soddisfatto dei nostri servizi. Eccone alcuni</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Hugo Meyer</h4>
            <span>Responsabile clienti</span>
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
            <span>Marketing Manager</span>
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
            <span>responsabile risorse umane</span>
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
            <span>Responsabile contabile</span>
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
          <h2>I nostri partner</h2>
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