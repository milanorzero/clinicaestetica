  <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Alonso Bustos</h1>
            <p>Administrador</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Barra de navegacion</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('view_productos')}}"> <i class="icon-home"></i>Productos </a></li>
                <li><a href="{{url('view_progamar')}}"> <i class="icon-grid"></i>Programar cita </a></li>
                <li><a href="{{url('view_gestion')}}"> <i class="fa fa-bar-chart"></i>Gestion de citas </a></li>
                <li><a href="{{url('view_historial')}}"> <i class="icon-padnote"></i>Historial de citas </a></li>
               
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Estadisticas </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Ajustes </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Finanzas </a></li>
        </ul>
      </nav>