<?php
$aNotas=array(9,8,9.5,7);
$aEmpleados= array();
$aEmpleados[]=array("dni"=>36419377,"nombre"=>"Rodrigo","bruto"=>20000);
$aEmpleados[]=array("dni"=>38451623,"nombre"=>"Pedro","bruto"=>25000);
$aEmpleados[]=array("dni"=>40678987,"nombre"=>"Maria","bruto"=>30000);

function contar($aArray){
    $cont=0;
    foreach($aArray as $item){
        $cont++;
    }
    return $cont;
}
 echo "Cantidad de notas" . contar($aNotas);
 echo "Cantidad de empelados" . contar($aEmpleados);
?>
