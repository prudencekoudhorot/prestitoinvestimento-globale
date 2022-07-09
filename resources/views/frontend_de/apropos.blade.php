@extends('frontend_de/include/layout')
@section('title') Über uns @endsection
@section('contenu')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Wer sind wir ?</h2>
      <ol>
        <li><a href="{{route('accueil_de')}}">Startseite</a></li>
        <li>Um</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- ======= About Us Section ======= -->
 <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Unser Hauptangebot</h2>
            <h3>Wir bieten allen ernsthaften Bedürftigen Kredite an</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              <b style="color: green;">Benötigen Sie eine Finanzierung, um ein Problem zu lösen?</b> 
              <br>Keine Sorge, kein Stress. Wir stehen Ihnen 24 Stunden am Tag, 7 Tage die Woche mit einem Team zur Verfügung, das sich Ihrer Zufriedenheit verschrieben hat.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Sei ein Mensch mit gutem Charakter</li>
              <li><i class="ri-check-double-line"></i> Haben Sie das Alter der Vernunft</li>
              <li><i class="ri-check-double-line"></i> Wissen, wie man die Texte respektiert</li>
            </ul>
            <p class="fst-italic">
            Bei uns hatten Sie die Gewissheit, Ihre Finanzierung in jeder Höhe zu erhalten, solange Sie es auch ernst meinen.
            </p>
            <p>
              <a class="btn btn-success" href="{{route('contact_de')}}"> Eine Anfrage stellen</a>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2><strong>Unser Team</strong></h2>
      <p>Wir haben mehrere Leute in unserem Team, aber wir hatten einen der Manager, der dafür sorgt, dass Sie mit unseren Dienstleistungen zufrieden sind. Hier sind ein paar</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="{{asset('theme/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Hugo Meyer</h4>
            <span>Kundenmanager</span>
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
            <span>Personalleiter</span>
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
            <span>Buchhaltungsleiter</span>
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
          <h2>Unsere Partner</h2>
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