<?php


$conex = mysqli_connect("localhost:3300","root","","formulario");


if (isset($_POST['contacto'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1&& strlen($_POST['asunto']) >= 1&& strlen($_POST['mensaje']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $asunto = trim($_POST['asunto']);
        $mensaje = trim($_POST['mensaje']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre,email,asunto,mensaje,fecha_mensaje) VALUES ('$name','$email','$asunto','$mensaje','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Mensaje enviado</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


?>