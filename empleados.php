<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Empleados</title>
    
</head>
<body>
    <h1>Listado de empelados</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                    <th>DNI</th>      
                    <th>Nombre</th>      
                    <th>Sueldo</th>        
                    </tr>
                <?php 
                foreach($aEmpleados as $aEmpleado){
                ?>    
                    <tr>
                    <td><?php echo $aEmpleados[$aEmpleado]["dni"];?></td>
                    <td><?php echo $aEmpleados[$aEmpleado]["nombre"];?></td>
                    <td><?php echo $aEmpleados[$aEmpleado]["bruto"];?></td>
                    </tr>
                }
                

                </table>
            </div>
        </div>
    </div>
</body>
</html>