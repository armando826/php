<!DOCTYPE HTML>
<html>
<head>
<title>Configuracion</title>
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
<h1>Informacion personal</h1>
<div class="singup">
		<h3>Ingresar informacion</h3>
	<div class="signup-main">
	  <form method="POST" action="configuracion.php">

	  <label>Saldo:</label>
	  
		<input type="text" id="saldo"  placeholder="Saldo" onblur="if (this.value == '') {this.value= 'Ingresar saldo';}" / ><br>
		 <label>Fecha de inicio:</label>
		 
		<input type="text" id="inicio" placeholder="Ingrese Fecha de Inicio"  onblur="if (this.value == '') {this.value = 'Ingrese Fecha de inicio';}" / ><br>
		 <label>Fecha de Fin:</label>
		 
		<input type="text" id="fin" placeholder="Ingrese Fecha Final"  onblur="if (this.value == '') {this.value = 'Ingrese Fecha Final';}" /><br>
	    <label>Periodicidad de pago:</label>
		 
		<select id="periodo"><option value="semanal">Semanal</option><option value="quincenal">Quincenal</option><option value="mensual">Mensual</option></select><br><br>
	    <input  type="submit" value="Ingresar" />

	  </div>
	    <p><a href="index.php">Sistema Web</a></p>
	  </form>
	  
	  <?php
       if(isset($_POST['submit'])){

              $saldo=$_POST['saldo'];
              $inicio=$_POST['inicio'];
              $fin=$_POST['fin'];
              $periodo=$_POST['periodo'];
              
              //validacion para saldo
             if(empty($saldo)){
                     echo "<p class=\"error\">*Ingrese su saldo</p>";
              }else if(preg_match("#^[a-z]*$#i",$saldo)) {
                    echo "<p id=\"error\">*Ingrese un saldo valido</p>";
              }

              //validacion para inicio
              if(empty($inicio)){
                     echo "<p class=\"error\">*Ingrese su fecha de inicio</p>";
              }
            
              //validacion para fin
              if(empty($fin)){
                     echo "<p class=\"error\">*Ingrese su fecha de fin</p>";
              }

              //validacion para periodo
              if(empty($periodo)){
                     echo "<p id=\"error\">*Ingrese su Periodicidad</p>";
              }
          
       }
       ?>


	</div>

</div>	

<footer>
</html>