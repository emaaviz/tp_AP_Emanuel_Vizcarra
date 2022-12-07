<?php

include("conexion.php");

$idcliente = $_POST["idcliente"];
$cliente = $_POST["cliente"];
$direccion = $_POST["direccion"];
$zona = $_POST["zona"];
$opcion = $_POST["opcion"];
$informacion = [];

switch ($opcion) {
  case 'registrar':
    registrar($cliente, $direccion, $zona, $conexion);
    break;
  case 'modificar':
    modificar($cliente, $direccion, $zona, $idcliente, $conexion);
    break;

  case 'eliminar':
    eliminar($idcliente, $conexion);
    break;
    default:
      $informacion["respuesta"]="OPCION_VACIA";
      echo json_encode ($informacion);
      break;
}

function existe_usuario($dni, $conexion){
		$query = "SELECT idcliente FROM clientes WHERE cliente = '$cliente';";
		$resultado = mysqli_query($conexion, $query);
		$existe_usuario = mysqli_num_rows( $resultado );
		return $existe_usuario;
	}

	function registrar($cliente, $direccion, $zona, $conexion){
		$query = "INSERT INTO clientes VALUES(0, '$cliente', '$direccion', '$zona', 1);";
		$resultado = mysqli_query($conexion, $query);
		verificar_resultado($resultado);
		cerrar($conexion);
	}

function modificar($cliente, $direccion, $zona, $idcliente, $conexion){
$query= "UPDATE clientes SET cliente='$cliente',
direccion='$direccion',
zona='$zona'
WHERE idcliente=$idcliente";
$resultado = mysqli_query($conexion, $query);
verificar_resultado( $resultado );
cerrar( $conexion );
}

function eliminar($idcliente, $conexion){
$query = "UPDATE clientes SET estado = 0 WHERE idcliente = $idcliente";
$resultado = mysqli_query($conexion, $query);
verificar_resultado( $resultado );
cerrar( $conexion );
}

function verificar_resultado ( $resultado ){
  if (!$resultado) $informacion["respuesta"] = "ERROR";
  else $informacion["respuesta"] = "BIEN";
  echo json_encode($informacion);
}

function cerrar($conexion){
  mysqli_close($conexion);
}

 ?>
