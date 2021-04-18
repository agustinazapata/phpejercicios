<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva= 0;
$resPrecioConIva= 0;
$resPrecioSinIva= 0;
$resIvaCantidad= 0;
    if($_POST){
        $iva= $_REQUEST["lstIVA"];
        $precioSinIva= $_REQUEST["txtImporteSinIVA"];
        $precioConIva= $_REQUEST["txtImporteConIVA"];

        if ($precioSinIva>0){
            $resPrecioConIva= $resPrecioSinIva *(21/100+1);
            $resPrecioSinIva=$resPrecioSinIva;
            $resIvaCantidad= $resPrecioConIva- $resPrecioSinIva;
        }
        if ($precioConIva>0){
            $resPrecioSinIva= $resPrecioConIva /(21/100+1);
            $resPrecioConIva= $resPrecioConIva;
            $resIvaCantidad= $resPrecioConIva- $resPrecioSinIva;
        }
        if ($precioConIva="" && $precioSinIva=""){
            $resPrecioSinIva= 0;
            $resPrecioConIva= 0;
            $resIvaCantidad= 0;
        }
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
            <form action="" method="POST">
                <div>
                    <label for="">IVA</label>
                    <select name="lstIVA" id="lstIVA" class="form-control">
                        <option value="21">21</option>
                        <option value="10.5">10.5</option>
                    </select>
                </div>
                <div>
                    <label for="">Precio sin IVA</label>
                    <input type="text" name="txtImporteSinIVA" id="txtImporteSinIVA">
                </div>
                <div>
                    <label for="">Precio con IVA</label>
                    <input type="text" name="txtImporteConIVA" id="txtImporteConIVA">
                </div>
                <div>
                    <label for="">IVA Cantidad</label>
                    <button type="submit" class="btn btn-primary">CALCULAR</button>
                </div>
            </form>

        </div>
        </div>
        <div class="col-4">
        <table class="table hover border">
            <tr>
                <th>IVA:</th>
                <td><?php echo $iva; ?></td>
            </tr>
            <tr>
                <th>Precio sin IVA:</th>
                <td><?php echo $resPrecioSinIva; ?></td>
            </tr>
            <tr>
                <th>Precio con IVA:</th>
                <td><?php echo $resPrecioConIva; ?></td>
            </tr>
            <tr>
                <th>IVA Cantidad:</th>
                <td><?php echo $resIvaCantidad; ?></td>
            </tr>
        </table>
        </div>
    </div>
</body>
</html>