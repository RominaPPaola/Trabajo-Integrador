<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1  && strlen($_POST['mail']) >= 1
    && strlen($_POST['titulo']) >= 1 && strlen($_POST['tema']) >= 1 )  {

	    $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $mail = trim($_POST['mail']);
        $titulo = trim($_POST['titulo']);
        $tema = trim($_POST['tema']);

	    $consulta = "INSERT INTO oradores(nombre, apellido,telefono,mail,titulo,tema) VALUES ('$nombre','$apellido','$telefono','$mail','$titulo','$tema')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok"><center>¡SU PEDIDO FUE ENVIADO CORRECTAMENTE!!</center></h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad"><center>¡Ups ha ocurrido un error!</center></h3>
           <?php
	    }
    }   
}

?>