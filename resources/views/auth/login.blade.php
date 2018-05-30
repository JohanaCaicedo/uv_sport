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
    <div class="row">
      <div class="col s12 m12 l4 xl4 offset-l4 offset-xl4">
        <div class="card">
          <br><br>
          {!! Form::open(['route' => 'login', 'method' => 'POST', 'class'=> 'container']) !!}
            {{ csrf_field() }}
            <div class="icon-block">
              <h1 class="center"><i class="material-icons icon-red">account_circle</i></h1>
            </div> 
            <div class="input-field">
            {!! Form::label('email', 'Correo') !!}
           {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="input-field">
            {!! Form::label('password', 'Contraseña') !!}
           {!! Form::password('password', null, ['class' => 'form-control', 'required']) !!}
            </div>
            {!! Form::submit('Ingresar', ['class' => 'btn waves-effect waves-red red accent-4']) !!}
            <br> <br>
            <div class="center"><a href="#">¿Olvidó su contraseña?</a></div>
            <br>
            <div class="center"><a class="a-red" href="{{ route('welcome') }}"><i class="material-icons">arrow_back</i></a></div>
            <br>
            {!!Form::close()!!} 
      </div>
    </div>
	</div>
	<!-- Compiled and minified JavaScript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
</body>
</html>




