<!DOCTYPE HTML>
<html>
<head>
<title>Registro</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Registrar Ususario</h1>
<div class="singup">
		<h3>Crear Una Cuenta</h3>
	<div class="signup-main">
	
	  <form method="POST" name="frmdatos">
		<input type="text" placeholder="Nombre"  name="nombre"/><br>
		<input type="text"  placeholder="Apellido"  name="apellido"/><br>
		<input type="number" placeholder="Edad" min="18"  name="edad"/><br></br>
    <input type="text" placeholder="Nombre de Usuario" name="usuario"/><br>
		<input type="password" placeholder="Contraseña" name="contra"/><br>
		<input type="password" placeholder="Confirmar contraseña" name="confirmar" />
		<div class="send-button" name="numero">
	    <input  type="submit" name="submit" value="Iniciar Secion" />
		  </div>
	    <p><a href="index.php">Sistema Web</a></p>
	  </form>

       <?php
       if(isset($_POST['submit'])){

              $nombre=$_POST['nombre'];
              $apellido=$_POST['apellido'];
              $edad=$_POST['edad'];
              $usuario=$_POST['usuario'];
              $contra=$_POST['contra'];
              $confirmar=$_POST['confirmar'];
              
              //validacion para nombre
             if(empty($nombre)){
                     echo "<p class=\"error\">*Ingrese su nombre</p>";
              }else
              if (preg_match("#^[a-z]*[0-9][a-z0-9]*$#i",$nombre)) {
                    echo "<p id=\"error\">*Debes introducir solo letras en su nombre</p>";
              }

              //validacion para apellido
              if(empty($apellido)){
                     echo "<p class=\"error\">*Ingrese su apellido</p>";
              }else
              if (preg_match("#^[a-z]*[0-9][a-z0-9]*$#i",$apellido)) {
                    echo "<p id=\"error\">*Debes introducir solo letras en su apellido</p>";
              }
            
              //validacion para edad
              if(empty($edad)){
                     echo "<p class=\"error\">*Ingrese su edad</p>";
              }else
              if (preg_match("#^[a-z]*[0-9][a-z0-9]*$#i",$apellido)) {
                    echo "<p id=\"error\">*Debes introducir solo letras en su apellido</p>";
              }
            

              //validacion para usuario
              if(empty($usuario)){
                     echo "<p id=\"error\">*Ingrese su nombre de usuario</p>";
              }
              else if(preg_match("#^[0-9]*$#i",$usuario)) {
                    echo "<p id=\"error\">*Tu nombre de usuario no puede llevar solo numeros</p>";
              }
              
              //validacion para contraseña
              if(empty($contra)){
                      echo "<p id=\"error\">*Ingrese una contraseña</p>";
              }else
              if($contra<4){
                      echo "Tu contraseña debe ser mayor a 4 caracteres";
              }

              //validacion para confirmar la contraseña
              if (empty($confirmar)) {
                      echo "<p id=\"error\">*Confirme su contraseña</p>";
              }
              else if ($contra!=$confirmar) {
                      echo "<p id=\"error\">*la contraseña es diferente</p>";
              }

       }
       ?>

	</div>
</div>	
<footer>
</html>