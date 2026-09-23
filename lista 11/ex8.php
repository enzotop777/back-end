<?php


$peso = $_POST["valor"];

if($peso <= 50){
    echo "você não pagará multa";
}
else{
    echo ($peso * 4) - 200;
}

?>