<?php

if($_POST){

$usuario= $_POST["txtUsuario"];
$contraseña= $_POST["txtContraseña"];

if( $usuario !="" && $contraseña !="") {
    header("Location: acceso_sistema.php");
} else{
    header("Location: usuario_novalido.php");
}
exit;
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <div class="row m-3">
        <div class="col-12">
            <h1>Formulario</h1>
        </div>
        <div class="col-sm-6 col-12 my-3">
            <form action="" method="POST">
                <div class="my-3">
                <label for="txtUsuario">Usuario</label>
                <input type="text" name="txtUsuario" id="txtUsuario">
                </div>
                <div class="my-3">
                <label for="txtContraseña">Contraseña</label>
                <input type="password" name="txtContraseña" id="txtContraseña">
                </div>                
                <div class="my-3">
                <button  class="btn btn-primary" type="submit">ENVIAR</button>
                </div> 
            </form>
        </div>
    </div>

</div>
    
</body>
</html>