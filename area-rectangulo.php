<?php

function calcularAreaRect($base,$altura){
    return $base*$altura;
}

echo "El area del rectangulo es " . calcularAreaRect(800,300);

?>

<?php

function calcularNeto($sueldobruto){
    return $sueldobruto*0.83;
}

echo "El sueldo neto es " . calcularNeto(60000)
?>