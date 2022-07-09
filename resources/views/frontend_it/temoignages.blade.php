@extends('frontend_it/include/layout')
@section('title') Témoignage @endsection
@section('contenu')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Testimonianze</h2>
          <ol>
            <li><a href="{{route('accueil_it')}}">Pagina iniziale</a></li>
            <li>Testimonianze</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="{{asset('theme/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>xìng shì</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I recommend prestitoinvestimento-globale.org if you want a loan. They are serious and fast.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="{{asset('theme/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img"alt="">
              <h3>Amadou Diop</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Heureux de faire partir de faire partir de leur clientèle. Ils sont fiable.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item mt-4">
              <img src="{{asset('theme/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Bruno Milo</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Un'organizzazione affidabile come loro nel prestito, non l'ho mai vista..
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-item mt-4">
              <img src="{{asset('theme/assets/img/testimonials/testimonials-6.jpg')}}" class="testimonial-img" alt="">
              <h3>Amber Hofman</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Ich habe mein Darlehen 72 Stunden nach meiner Anfrage erhalten. Sie meinen es ernst.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection