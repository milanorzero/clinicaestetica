<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
      @include('admin.header')
  
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

      <body>
     <style type="text/css">
      .div_deg
      {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
      }
      .table_deg
      {
        border: 2px solid greenyellow;
      }
      th{
        background-color: skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
      }
      td{
        border: 1px solid skyblue;
        text-align: center;
      }
    </style>
  <div>
      <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Añadir producto </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h1>
          Nuevo producto
        </h1>
      </div>
     
       <form action="{{url('añadir_producto')}}" method="Post" enctype="multipart/form-data">

        @csrf

         <div>
           <label>Nombre producto</label>
           <input type="text" name="nombreproducto" required>
         </div>
         <div>
           <label>Imagen</label>
           <input type="file" name="image" required>
         </div>
          <div>
           <label>Precio</label>
           <input type="text" name="precio" required>
         </div>
         <div>
           <label>Cantidad inicial</label>
           <input type="number" name="cantidad" required>
         </div>

          <div>
           <label>Añadir nuevo producto</label>
           <input class="btn btn-success" type="submit" value="Añadir producto" >
         </div>
       </form>
       

      </div>



    </div>
  </div>

   
       <h2> Productos Disponibles</h2z>
   
        <div class="div_deg">
          <table class="table_deg">
            <tr>
             <th>Nombre Producto</th>

             <th> Imagen</th>

             <th> Precio</th>

             <th> Cantidad</th>

            </tr>

            @foreach($producto as $productos)

            <tr>
              
              <td>{{$productos->nombreproducto}}</td>
              <td>
                <img src="productos/{{$productos->image}}">
              </td>
              <td>{{$productos->precio}}</td>
              <td>{{$productos->cantidad}}</td>
                
               
            </tr>

            @endforeach
        </table>





        </div>




</body>
      @include('admin.footer')

           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>