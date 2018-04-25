<?php 
	if($_FILES['archivo']['error']){//se revisa que no haya ningun error al subri el archivo
		echo "Error al subir el archivo";
	}else {
		$fecha = date('dHi');
		$aleatorio = rand(10,99);
		
		$ruta = 'archivos/'.$fecha.$aleatorio.$_FILES['archivo']['name'];
		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)){//se sube el archivo a la carpeta
			echo 'si';
		}else{
			echo 'no';
		}
	}
 ?>
<?php
require('modularidad/header.inc.php');
?>
<body>
<div id="pagewrap">
<!-- #header y #nav -->
<?php
require('modularidad/nav.inc.php');
?>



 <div>
 	<?php 
      
            
     //validaciones

if (isset($_POST['agregar'])){
         $id = isset($_POST['id']) ? $_POST['id'] : "";
         if(!preg_match("/^[E][0-9]{3}\s*/",$id)){
             echo "<h4>Existe un error en el ingreso de los datos del ID<h4>";
           
         }

         $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
         if(!preg_match("/[a-zA-Z]\s*/",$nombre)){
             echo "<h4>Existe un error en el ingreso de los datos del Nombre</h4>";
            
         }
         $sueldo = isset($_POST['sueldo']) ? $_POST['sueldo'] : "";
         if(!preg_match("/[0-9]\s*/",$sueldo)){
             echo "<h4>Existe un error en el ingreso de los datos del Sueldo</h4>";
             
         }
        
     } 


 	function __autoload($ClassName){
 		///echo "class/" . $ClassName . "class.php";
		include_once("class/" . $ClassName . ".class.php");
	}

// para el boton guardar 
	if(isset($_POST["agregar"])){
		$emploMana = new EmployeeManager();
		$emploMana->saveEmployee($ruta);

	}

 	 ?>
 </div>

 <div>
 	<h1>listado de empleados</h1>
 	<table id="tEmple" class="table table-bordered table-hover" cellspacing="0" width="20%">
					<thead>
						<tr>								
							<th>ID</th>
							<th>NOMBRE</th>
							<th>SULDO</th>
							<th>PDF</th>											
						</tr>
					</thead>
						
					<tbody>
						<?php
							$emploMana->listEmployee(); 
						 ?>
					</tbody>

				</table>
 </div>




<!-- #footer -->
<?php
require('modularidad/footer.php');
?>
<!-- /#footer -->
</div>
<!-- /#pagewrap -->
</body>
</html>