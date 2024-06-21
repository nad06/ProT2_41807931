<!-- Navegacion FALTA MODIFICAR CONTENIDO-->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand .me-" href="<?php echo base_url('principal')?>">
      <!-- Logo de la pagina-->
      <img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="Logotipo de la Pasteleria" width="75" height="30" class="img-fluid"/>
    </a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>

        <!-- ver en q lo uso es el desplegable-->
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nuestro Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Pasteleria</a></li>
            <li><a class="dropdown-item" href="#">Eventos y Catering</a></li>
            <!--<li><hr class="dropdown-divider"></li>-->
            <li><a class="dropdown-item" href="#">Mesa Dulce</a></li>
          </ul>
        </li>
        

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>