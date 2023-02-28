<?php
if(!isset($_POST["id"])) exit();
$id = $_POST["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM horarios WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./home2.php");
	exit;
}
else echo "Algo salió mal";
?>