<?php 

	function __autoload($ClassName){
	include_once("class/" . $ClassName . ".class.php");
}

	//instanciadno la clase
	$plantilla = new index1();

 ?>

<!DOCTYPE html>
<html>
<head>
	<?php 

	//llamando el metodo head
	$plantilla->head();

	 ?>
</head>
<body>

<div id="pagewrap">
	<?php 
	//llamando el metodo nav
	$plantilla->nav();
	$plantilla->sidebar();
	$plantilla->content();
	$plantilla->footer();

	 ?>
</div>
</body>
</html>