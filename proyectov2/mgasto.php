<!DOCTYPE html>
<html>
<head>
	<title>Total de gastos</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>Registro de gastos</h1>
	<div class="singup">
		<h3>gastos actuales</h3>
		<div class="singup-main">
			<table id="hor-zebra" summary="Datos recibidos del formulario">
<thead>
 <tr>
 <th>titulo</th>
 <th>Precio</th>
 <th>fecha</th>
 </tr>
</thead>
<tbody>
					<?php
					    $titulo=(isset($_POST["titulo"]));
					    $precio=(isset($_POST["precio"]));
					    $fecha=(isset($_POST["fecha"]));

					 echo "\t<tr>\n";
					 echo "\t\t<td>\nTitulo\n</td>\n";
					 echo "\t\t<td>\n" .$titulo. "\n</td>\n";
					 echo "\t</tr>\n";
					 echo "<br/>";
					 echo "\t<tr>\n";
					 echo "\t\t<td>\nPrecio\n</td>\n";
					 echo "\t\t<td>\n" .$precio. "\n</td>\n";
					 echo "\t</tr>\n";
					 echo "<br/>";   
					 echo "\t<tr>\n";
					 echo "\t\t<td>\nFecha\n</td>\n";
					 echo "\t\t<td>\n" .$fecha . "\n</td>\n";
					 echo "\t</tr>\n";
					 ?>
		</div>
	</div>
	</tbody>
</table>
</div>
</div>
</body>
</html>