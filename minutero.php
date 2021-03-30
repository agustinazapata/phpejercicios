<?php
echo "Fecha y hora actual" . date("d/m/Y H:i") ."<br>";
$hr= date("H");
$min=date("i");

for($i=0; $i < 60; $i++){
echo "la hora es $hr:$min hs <br>";
$min++;
if($min== 60){
    $min=0;
    $hr++;
}
if($hr==24){
    $hr=0;
}
}

?>


