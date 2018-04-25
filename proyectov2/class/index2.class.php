<?php 

//clase para el index 1
/**
* 
*/
class index2
{

		//funcion head
	function head(){
		echo "<!DOCTYPE html>";
		echo "<html lang=\"es\">";
		echo "<head>";
		echo "<meta charset=\"utf-8\" />";
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\">";
		echo "<title>Sistema de Gasto</title>";
		echo "<!--css -->";
		echo "<link rel=\"stylesheet\" href=\"css/style.css\" />";
		echo "</head>";
	}


	function nav(){

		echo "<header id=\"header\">";
		echo "<hgroup>";
		echo "<img src=\"img/logo.png\" id=\"logo\" alt=\"logo\" >";
		echo "<h1 id=\"site-description\">SISTEMA DE CONTROL DE GASTOS PERSONALES</h1>";
		echo "</hgroup>";
		echo "<nav>";
		echo "<ul id=\"main-nav\" class=\"clearfix\">";
		
			$externallinks = array(
				"index2.php" => "Inicio",
				"configuracion.php" => "Configuracion",
				"gasto.php" => "Agregar un Gasto",
				"pagos.php" => "Agregar un Pago",
				"index.php" => "Salir"
			);
			$listext = "";
			foreach($externallinks as $extlink => $extitem):
			$listext .= "\n<li>\n\n<a href=\"$extlink\">$extitem</a>\n</li>\n";
			endforeach;
			echo $listext;
		
		echo "</ul>";
		echo "</nav>";
		echo "<form id=\"searchform\" action=\"javascript:void(0)\">";
		echo "<input id=\"s\" placeholder=\"Search\" type=\"search\">";
		echo "</form>";
		echo "</header>";
		
	}
	
	//funcion de sidebar
	function sidebar(){
		echo "<aside id=\"sidebar\">";

		echo "<section class=\"widget\">";
		echo "<h4 class=\"widgettitulo\">Informacion</h4>";
		echo "<ul>";
		
		$submenuoptions = array(
		"VerGastos.php" => "Ver mis Gastos",
		"VerPagos.php" => "Ver mis Pagos",
		"VerInfo.php" => "Ver mi Informacion"

		);
		$listsubmenu = "";
		foreach($submenuoptions as $link1 => $itemsub):
		$listsubmenu .= "\n<li>\n\n<a href=\"$link1\">$itemsub</a>\n</li>\n";
		endforeach;
		echo $listsubmenu;
		
		echo "</ul>";
		echo "</section>";


		echo "<section class=\"widget\">";
		echo "<h4 class=\"widgettitulo\">Sitos Web</h4>";
		echo "<ul>";
		
			$externallinks = array(
			"https://twitter.com/" => "Twitter",
			"http://www.facebook.com/" => "Facebook",
			"http://www.youtube.com/" => "YouTube"

			);
			$listext = "";
			foreach($externallinks as $extlink => $extitem):
			$listext .= "\n<li>\n\n<a href=\"$extlink\">$extitem</a>\n</li>\n";
			endforeach;
			echo $listext;
		
		echo "</ul>";
		echo "</section>";
		echo "</aside>";
	}

	//funcion contenido
	function content(){
		echo "<div id=\"content\">";
		echo "<article class=\"post clearfix\">";
		echo "<h2 class=\"post-title\"><a href=\"#\">Bienvenido</a></h2>";
		echo "<figure class=\"post-imagen\">";
		echo "<img src=\"img/html5-imagen.jpg\">";
		echo "</figure>";
		echo "<p>";
		echo "<p>Sistema creado para el uso personal, para poder llevar un buen control de gastos, en la cual
		mediante el ingreso mensual, quincenal o semanal segun el periodo de pago que posea podra 
		elegir una prioridad.</p>";

		echo "<p>
		Una vez realizado el registro y configurada la aplicacion debe registrar los gastos realizados 
		en el mes, en la interfaz se podra registrar la cantidad gastada y un concepto o titulo del gasto. </p>";
		echo "<p>
		Cuenta con herramientas que le indiquen alarmas de poca disponibilidad de efectivo cuando la suma de gastos
		sea mayor al presupuesto alcanzado.
		</p>";
		echo "</p>";
		echo "</article>";
		echo "<article class=\"post clearfix\">";
		echo "<h2 class=\"post-title\"><a href=\"#\">Sitio Web</a></h2>";
		echo "<figure class=\"post-imagen\">";
		echo "<img src=\"img/css3-imagen.jpg\">";
		echo "</figure>";
		echo "<p> En un sistema un sitio web para uso personal de cualquier persona que desee llevar un control de sus gastos personales. </p>";
		echo "</article>";
		echo "<!-- /.post -->";
		echo "</div>";
		
	}

	//funcion footer
	function footer(){
		echo "<footer id=\"footer\">";
		echo "<p><a href=\"http://www.udb.edu.sv/udb/index.php/\">Universidad Don Bosco UDB</a></p>";
		echo "</footer>";
	}
}

 ?>