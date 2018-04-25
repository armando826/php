<!DOCTYPE HTML>
<html>
<head>
<title>registro de gastos</title>
<!-- Custom Theme files -->
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<!--sign up form start here-->
<h1>Registo de gastos</h1>
<div class="singup">
		<h3>Añidir un Gasto</h3>
	<div class="signup-main">


	  <form method="POST" action="mgasto.php">
	  	<label>Titulo</label>
		<input type="text" id="titulo" placeholder="titulo de su gasto"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'titulo'; }" /><br><br>

		<label>Cantidad</label>
		<input type="text" id="cantidad" placeholder="cantidad" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cantidad';}" /><br><br>

		<label>Fecha</label>
		<input type="date" id="fecha" placeholder="fecha" class="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'fecha';}" /><br><br>
		
		<label>Hora</label>
		<input type="text" id="hora" placeholder="Hora" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Hora';}" /><br><br>	
		
		<label>Descripcion:</label>
		<input type="text" id="descripcion" placeholder="Descripcion" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Descripcion';}" required /><br><br>
	  
	  <div class="send-button">
	    <input  type="submit" value="Guardar" />
	  </div>

	  </form>

	  <?php
       if(isset($_POST['submit'])){

              $saldo=$_POST['titulo'];
              $inicio=$_POST['inicio'];
              $fin=$_POST['fin'];
              $periodo=$_POST['periodo'];
              
              //validacion para titulo
             if(empty($titulo)){
                     echo "<p class=\"error\">*Ingrese un titulo</p>";
              }

              //validacion para cantidad
              if(empty($cantidad)){
                     echo "<p class=\"error\">*Ingrese una cantidad</p>";
              }else if(preg_match("#^[A-Za-z]*$#i",$cantidad)) {
                    echo "<p id=\"error\">*Ingrese una cantidad valida</p>";
              }
            
              //validacion para fecha
              if(empty($fecha)){
                     echo "<p class=\"error\">*Ingrese su fecha</p>";
              }

              //validacion para periodo
              if(empty($hora)){
                     echo "<p id=\"error\">*Ingrese la hora</p>";
              }

              //validacion para periodo
              if(empty($descripcion)){
                     echo "<p id=\"error\">*Ingrese la descripcion</p>";
              }
          
       }
       ?>
	</div>
</div>	
<footer>
</html>