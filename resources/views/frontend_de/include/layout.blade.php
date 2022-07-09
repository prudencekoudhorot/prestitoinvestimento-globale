<!DOCTYPE html>
<html lang="fr">
<!-- head -->
@include('frontend_de/include/head')
<!-- endheader -->

<body>
    <!-- header -->
    @include('frontend_de/include/header')
    <!-- endheader -->
    <div id="app" style="margin-top: 30px;">
        @include('frontend_de/flash-message')
    </div>
    <!-- end message -->

    <!-- Contenu de la page -->
    @yield('contenu')
    <!-- End contenu de la page -->
    <!--footer-->
    @include('frontend_de/include/footer')
    <!--footer-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('theme/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('theme/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('theme/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('theme/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('theme/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('theme/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('theme/assets/js/main.js')}}"></script>

</body>

</html>