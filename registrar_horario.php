<?php
include_once "base_de_datos.php";
$grupo=$_POST['grupo'];
$horario=$_POST['horario'];
$sentencia = $base_de_datos->prepare("INSERT INTO horarios(grupo,horario) VALUES (?, ?);");
 
$resultado = $sentencia->execute([$grupo, $horario]);

if($resultado === TRUE){
	header("Location: ./home2.php");
	exit;
    //INSERT INTO `horarios` (`id`, `grupo`, `horario`) VALUES (NULL, 'asdfads', 'asdfads');
}