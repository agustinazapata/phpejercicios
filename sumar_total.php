<?php
$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
                   "marca" => "Hitachi",
                   "modelo" => "554KS20",
                   "stock" => 60,
                   "precio" => 58000
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
                   "marca" => "Samsung",
                   "modelo" => "Galaxy A30",
                   "stock" => 0,
                   "precio" => 22000
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
                   "marca" => "Surrey",
                   "modelo" => "553AIQ1201E",
                   "stock" => 5,
                   "precio" => 45000
);
$aProductos[] = array("nombre"=> "HP impresoa",
                    "marca"=> "HP",
                    "modelo"=> "P543",
                    "stock"=> 15,
                    "precio"=> 40000,
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h1>Listado de productos</h1>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <table class="table border">
    <tr>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Acción</th>
    </tr>
    <?php 
        $subtotal=0;
        for($contador = 0; $contador < count($aProductos); $contador++){ 
    ?>
           
    <tr>
        <td><?php echo $aProductos[$contador] ["nombre"]; ?></td>
        <td><?php echo $aProductos[$contador] ["marca"]; ?></td>
        <td><?php echo $aProductos[$contador] ["modelo"]; ?></td>
        <td><?php echo $aProductos[$contador] ["stock"]<10? "Poco stock" : ["stock"]==0? "sin stock": "hay stock" ?></td>
        <td><?php echo $aProductos[$contador] ["precio"]; ?></td>
        <td> <button class="btn btn-primary">Comprar</button></td>
    </tr>
    <?php
        $subtotal= $subtotal + $aProductos[$contador] ["precio"]; 
    }
    ?>
    
    </table>
    <h2>El subtotal es: <?php echo $subtotal; ?> </h2>
    </div>
    </div>
    </div>



</body>
</html>