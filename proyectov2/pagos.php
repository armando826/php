<!DOCTYPE HTML>
<html>
<head>
<title>registro de pagos</title>
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
<h1>Registo de pagos</h1>
<div class="singup">
		<h3>Añidir un pago</h3>
	<div class="signup-main">


	  <form method="POST" action="pago.php">
	  	<label>Titulo</label>
		<input type="text" id="titulo" placeholder="titulo de su gasto"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'titulo'; }" required/><br><br>

		<label>Cantidad</label>
		<input type="text" id="cantidad" placeholder="cantidad" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cantidad';}" required /><br><br>

		<label>Fecha</label>
		<input type="date" id="fecha" placeholder="fecha" class="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'fecha';}" required /><br><br>
		
		<label>Hora</label>
		<input type="text" id="hora" placeholder="Hora" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Hora';}" required /><br><br>	
		
		<label>Descripcion:</label>
		<input type="text" id="descripcion" placeholder="Descripcion" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Descripcion';}" required /><br><br>
	  
	  <div class="send-button">
	    <input  type="submit" value="Guardar" />
	  </div>

	  </form>
	</div>
</div>	
<footer>
</html>