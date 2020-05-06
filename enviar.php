
<?php

//valores de post


$destino ="alejandro.voynich@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];


$contenido = "Nombre" . $nombre ."Correo: " . $correo ."Mensaje" . $mensaje;








mail($destino,"Porelcaño-Contacto", $contenido);


 header("Location:index.php");
//  echo '<p class="alert alert-success agileits" role="alert">Email enviado correctamente!p>';
?>

