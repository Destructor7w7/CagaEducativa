<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 ){
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$usuario = trim($_POST['usuario']);
		$contraseña = trim($_POST['contraseña']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, apellido, usuario, contraseña, fecha_reg) VALUES ('$nombre', '$apellido', '$usuario','$contraseña',  '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente! ya puedes iniciar sesion</h3>
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