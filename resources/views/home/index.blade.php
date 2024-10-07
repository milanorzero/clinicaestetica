<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>

  <div class="hero_area">
    <!-- inicio header -->
    @include('home.header')
    <!-- fin header -->
    <!-- inicio slider -->
    @include('home.slider')
    <!-- fin slider -->
  </div>


  


  <!-- Inicio seccion tienda -->

   @include('home.tienda')

  <!-- Final seccion tienda -->

<!-- Inicio seccion reservar cita -->

    @include('home.reserva')

  <!-- Final seccion reservar cita -->

  <!-- Inicio seccion tratamientos -->

 @include('home.tratamientos')

  <!-- Fin seccion tratamientos -->

  <!-- Inicio seccion informacion doctora -->

   @include('home.doctora')

  <!-- Fin seccion informacion doctora -->


  <!-- Inicio seccion contacto -->

   @include('home.contacto')
  
  <!-- Fin seccion contacto -->

  <!-- Inicio seccion informacion -->

  @include('home.info')

  <!-- Fin seccion informacion -->


  <!-- Inicio footer -->
  
  @include('home.footer')

  <!-- Fin footer -->

  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>


</body>

</html>