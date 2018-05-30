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
<body style="background-color: #ffebee">
	<div class="container">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#">Actualizar datos</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar deportes</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar torneos</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar partidos</a></li>
        <li class="divider"></li>
        <li><a href="index.html">Cerrar sesión</a></li>
      </ul>	
      <ul id="dropdown2" class="dropdown-content">
        <li><a href="#">Manual</a></li>
        <li class="divider"></li>
        <li><a href="#">Soporte técnico</a></li>
        <li class="divider"></li>
        <li><a href="#">Licencias</a></li>
      </ul>
      <ul id="dropdown3" class="dropdown-content">
        <li><a href="#">Actualizar datos</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar deportes</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar torneos</a></li>
        <li class="divider"></li>
        <li><a href="#">Gestionar partidos</a></li>
        <li class="divider"></li>
        <li><a href="index.html">Cerrar sesión</a></li>
      </ul> 
      <ul id="dropdown4" class="dropdown-content">
        <li><a href="#">Manual</a></li>
        <li class="divider"></li>
        <li><a href="#">Soporte técnico</a></li>
        <li class="divider"></li>
        <li><a href="#">Licencias</a></li>
      </ul>
      <nav class="red accent-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">UV-Sport</a>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-button" href="#" data-activates="dropdown1">NicknameAdmin<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropdown2">Acerca de UV-Sport<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          
          <ul id="nav-mobile" class="side-nav">
            <li><a class="dropdown-button" href="#" data-activates="dropdown3">NicknameAdmin</a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropdown4">Acerca de UV-Sport</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <br><br><br>
    	<div class="row">
        <div class="col s12 m12 l13 xl13">
          <div class="card">
            <br><br>
            <form class="container">
            <header><h4>Equipos</h4></header> 
           <br>
           <ul class="collection">

<li class="collection-item">
            <table class="highlight">
              <thead>
                <tr>
                  <th>Equipo</th>
                  <th>Integrantes</th>
                  <th colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($equipo_integrantes as $equipo_integrantes)
                <tr>
                  <td>{{$equipo_integrantes->equipo}}</td>
                  <td>{{$equipo_integrantes->integrantes}}</td>
                </tr>
                @endforeach       			
              </tbody>

            </table>
            {!!$equipo_integrantes->render()!!}
          
</li>

</ul>
<br>

            </form>
          </div>
  		  </div>
      </div>
      <br><br><br><br><br><br><br>
      <footer class="page-footer red darken-4">
        <div class="containe<br>r">
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
	</div>
	<!-- Compiled and minified JavaScript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
</body>
</html>