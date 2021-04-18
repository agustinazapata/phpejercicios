<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//*en esta instancia levanta los datos que ha caragdo el cliente y se ha guardado en "archivo" y convierte en array*//
if(file_exists("archivo.txt")){
    $jsonClientes= file_get_contents("archivo.txt");

    $aClientes= json_decode($jsonClientes,true);
} else{
        $aClientes= array();
}
$id= isset($_GET["id"]) && $_GET["id"] != "" ? $_GET["id"] :"";

if ($_POST) {
    $dni= $_POST["txtDni"];
    $nombre= $_POST["txtNombre"];
    $telefono= $_POST["txtTelefono"];
    $correo= $_POST["txtCorreo"];

    $aClientes[]= array(
        "dni"=> $dni,
        "nombre"=> $nombre,
        "telefono"=> $telefono,
        "correo"=> $correo,
    );
    
    $jsonClientes= json_encode($aClientes);

    file_put_contents( "archivo.txt", $jsonClientes);
}
if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
    $nombre = date("Ymdhmsi") . rand(1000,5000);
    $archivo_tmp = $_FILES["archivo"]["tmp_name"];
    $nombreArchivo = $_FILES["archivo"]["name"];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $nuevoNombre = "$nombre.$extension";
    move_uploaded_file($archivo_tmp, "imagenes/". $nuevoNombre);
}

//*estoy actualizando*//

if ($id =! "") {
    $aClientes [$id]= array(
        "dni"=> $dni,
        "nombre"=> $nombre,
        "telefono"=> $telefono,
        "correo"=> $correo,
    );
} else { //*insertar cliente nuevo*//
    $aClientes [$id]= array(
        "dni"=> $dni,
        "nombre"=> $nombre,
        "telefono"=> $telefono,
        "correo"=> $correo,
        "imagen" => $nuevoNombre
    );
}


//* eliminar posiciones*//
if(isset($_GET["id"]) &&  $_GET["id"] !="" && isset($_GET["do"]) &&  $_GET["do"]=="eliminar"){
    unset($aClientes[$id]);
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
      <div class="container">
        <div class="row">
            <div class="col-12 text-center">  
                <h1>Resgistro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-12 form-group">
                    <label for="txtDni"> DNI:*</label>
                    <input type="text"  name="txtDni" id="txtDni" class="form-control" required> 
                </div>
                <div class="col-12 form-group">
                    <label for="txtNombre"> Nombre:*</label>
                    <input type="text"  name="txtNombre" id="txtNombre" class="form-control" required> 
                </div>
                <div class="col-12 form-group">
                    <label for="txtTelefono"> Telefono:*</label>
                    <input type="text"  name="txtTelefono" id="txtTelefono" class="form-control" value> 
                </div>
                <div class="col-12 form-group">
                    <label for="txtCorreo">Correo: *</label>
                    <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required="" value="">
                </div>
                <div class="col-12 form-group">
                    <label for="txtCorreo">Archivo adjunto:</label>
                    <input type="file" id="archivo" name="archivo" class="form-control-file" accept=".jpg, .jpeg, .png">
                    <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                </div>
                <div class="col-12 form-group">
                    <button type="submit" id="btnguardar" name="btnguardar" class="btn btn primary">Guardar</button>
                </div>
            </form>
            </div>

            <div class="col-6">
            <table class="table table-hover border">
                <tr>
                    <th>Imagen</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                <?php
                foreach($aClientes as $pos => $aCliente):   ?>
               
                <tr>
                    <td></td>
                    <td><?php echo $aCliente ["dni"]; ?></td>
                    <td><?php echo $aCliente["nombre"]; ?></td>
                    <td><?php echo $aCliente["correo"]; ?></td>
                    <td style="width: 110px;">
                        <a href="index.php?id=<?php echo $pos; ?> <?php echo $id; ?>"><i class="fas fa-edit"></i></a>
                        <a href="index.php?id=<?php echo $pos; ?> <?php echo $id; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
              
                <?php endforeach; ?>
             

            </table>
            
            </div>
        
        </div>
    
    </div>
</body>
</html>