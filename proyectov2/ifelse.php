<?php

$user = "isaac";
$contras = 123456;

	$nombre=(!isset($_POST["name"]))?"incorrecto":$_POST["name"];
	$contra=(!isset($_POST["password"]))?"incorrecto":$_POST["password"];
	
if (($nombre == $user)&&($contra ==$contras)) {
	header('Location: https://www.google.com.sv');
}else{
	echo "El usuario no EXISTE";
}
	
?>