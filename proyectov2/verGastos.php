<!DOCTYPE html>
<html>
<ink href="css/estilotabla.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/estyle.css" rel="stylesheet" type="text/css" media="all"/>
<head>
	<title></title>
</head>
<body>
<?php
	function __autoload($ClassName){
	include_once("class/" . $ClassName . ".class.php");
}

	//instanciadno la clase
	$plantilla = new index2();
	$plantilla->head();
?>
<div id="pagewrap">
<!-- #header y #nav -->
<?php
$plantilla->nav();
?>
<br>
<div class="table-responsive col-sm-12">		
				<table border="1" id="info" class="table table-bordered table-hover" cellspacing="0" width="60%">
					<thead>
						<tr>	
							<th>ID</th>							
							<th>Titulo</th>
							<th>Catidad</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Descriccion</th>
							<th>Pago</th>											
						</tr>
					</thead>

</table>
		
		 <?php
$plantilla->sidebar();
?>
	 
	<script src="js/jquery-1.12.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<!--botones DataTables-->	
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="js/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="js/buttons.html5.min.js"></script>

	<script>		
		$(document).ready(function(){
    		$('#info').DataTable();
		});

		
		

	</script>
 <?php
$plantilla->footer();
?>
<!-- /#footer -->
</div>
<!-- /#pagewrap -->
</body>
</html>