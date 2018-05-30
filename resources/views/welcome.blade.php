<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<meta name="description" content="Aplicacion de gestion de torneos deportivos de la Universidad Del Valle Sede Yumbo"/>
	<meta name="keywords" content="univalle, universidad, valle, torneos, deportivos, sede, yumbo"/>
	<title>UV-Sport</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<header>
		<img class="responsive-img" src="img/headerUnivalle.png">
	</header>

  <!--Dropdowns-->
  <ul id="dropdown1" class="dropdown-content">
    <li><a class="modal-trigger" href="#modal1">Manual</a></li>
    <li class="divider"></li>
    <li><a class="modal-trigger" href="#modal2">Soporte técnico</a></li>
    <li class="divider"></li>
    <li><a class="modal-trigger" href="#modal3">Licencias</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a class="modal-trigger" href="#modal1">Manual</a></li>
    <li class="divider"></li>
    <li><a class="modal-trigger" href="#modal2">Soporte técnico</a></li>
    <li class="divider"></li>
    <li><a class="modal-trigger" href="#modal3">Licencias</a></li>
  </ul>

  <!-- Modals-->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Cómo usar UV-Sport</h4>
      <p>Aquí agregarás el manual de UV-Sport...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>

  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>¿Tienes algún inconveniente?</h4>
      <p>Comunícate con nosotros...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>

  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>UV-Sport Licencias</h4>
      <p>UV-Sport fue concebido bajo las siguientes normativas de licenciamiento...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>

  <div id="modal4" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Listado de deportes</h4>
      <p>Los deportes practicados actualmente en la Sede Yumbo de la Universidad Del Valle, son...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>

  <div id="modal5" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Listado de equipos</h4>
      <p>Los equipos deportivos que están conformados en la Sede Yumbo son...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>

  <div id="modal6" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Listado de torneos</h4>
      <p>Esta es la información acerca de los torneos recientes...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div>     

  <div id="modal7" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Partidos</h4>
      <p>Estos son los resultados de los últimos partidos...</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
  </div> 

	<nav class="red accent-4" role="navigation">
    	<div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">UV-Sport</a>
    	  <ul class="right hide-on-med-and-down">
    	    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
          <li><a class="dropdown-button" href="#" data-activates="dropdown1">Acerca de UV-Sport<i class="material-icons right">arrow_drop_down</i></a></li>
    	  </ul>
	
    	  <ul id="nav-mobile" class="side-nav">
          <li><a href="iniciarSesion.html">Iniciar sesión</a></li>
    	    <li><a class="dropdown-button" href="#" data-activates="dropdown2">Acerca de UV-Sport</a></li>
    	  </ul>
    	  <a href="#" data-activates="nav-mobile" class="button- collapse"><i class="material-icons">menu</i></a>
    	</div>
  </nav>
	<div class="container">	
    	<div class="row">
    		<div class="col s12 m12 l6 xl6">
      			<div class="card red lighten-5">
        			<div class="card-content ">
          				<span class="card-title">Deportes Disponibles</span>
          				<p>Aquí encontrarás la lista de deportes que se practican en la Sede Yumbo actualmente.</p>
        			</div>
        			<div class="card-action">
          				<a class="modal-trigger" href="#modal4">Ver deportes</a>
        			</div>
      			</div>
    		</div>
    		<div class="col s12 m12 l6 xl6">
      			<div class="card red lighten-1">
        			<div class="card-content white-text">
          				<span class="card-title">Equipos</span>
          				<p>Breves descripciones de los equipos más destacados y el deporte practicado por cada
                  uno de ellos.</p>
        			</div>
        			<div class="card-action">
          				<a class="modal-trigger" href="#modal5">Ver equipos</a>
        			</div>
      			</div>
    		</div>
    		<div class="col s12 m12 l6 xl6">
      			<div class="card red lighten-1">
        			<div class="card-content white-text">
          				<span class="card-title">Torneos Actuales</span>
          				<p>Un pequeño recorrido acerca de los torneos que se han llevado a cabo recientemente.</p>
        			</div>
        			<div class="card-action">
          				<a class="modal-trigger" href="#modal6">Ver torneos</a>
        			</div>
      			</div>
    		</div>
    		<div class="col s12 m12 l6 xl6">
      			<div class="card red lighten-5">
        			<div class="card-content">
          				<span class="card-title">Últimos Partidos</span>
          				<p>En esta sección encontrarás los resultados de los partidos más importantes del último
                  torneo realizado.</p>
        			</div>
        			<div class="card-action">
          				<a class="modal-trigger" href="#modal7">Ver partidos</a>
        			</div>
      			</div>
    		</div>
  		</div>
	</div>
	<footer class="page-footer red darken-4">
        <div class="container">
        	<div class="row">
            	<div class="col s12 m12 l3 xl3">
              		<h5 class="white-text">Universidad del Valle</h5>
              		<p class="grey-text text-lighten-4">Yumbo-Colombia</p>
            	</div>
            	<div class="col s12 m12 l3 xl3">
              		<h5 class="white-text">Dirección</h5>
              		<p class="grey-text text-lighten-4">Calle 3N 2N-17 Barrio las vegas</p>
            	</div>
            	<div class="col s12 m12 l3 xl3">
              		<h5 class="white-text">Teléfono</h5>
              		<p class="grey-text text-lighten-4">+57 2 6699323</p>
            	</div>
            	<div class="col s12 m12 l3 xl3">
              		<h5 class="white-text">Redes sociales</h5>
              		<a class="grey-text text-lighten-4" href="https://www.facebook.com/universidaddelvalle">Facebook</a>
              		<br>
              		<a class="grey-text text-lighten-4" href="https://www.youtube.com/user/universidaddelvalle1">Youtube</a>
              		<br>
              		<a class="grey-text text-lighten-4" href="https://twitter.com/univallecol">Twitter</a>
            	</div>
          	</div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          	Creado en el 2018 
          <a class="grey-text text-lighten-4 right" href="#!">Contacto con los creadores</a>
          </div>
        </div>
    </footer>
	<!-- Compiled and minified JavaScript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
</body>
</html>