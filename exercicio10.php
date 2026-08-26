<?php

$peso = 56;
$altura = 1.67;
$resultado = $peso / ($altura * $altura);

echo "seu IMC é: ", $peso,"<br>";
echo "sua altura é: ", $altura, "<br>";
echo "seu IMC é: " , $resultado, "<br>";

if($resultado < 25) {
    echo "peso ideal";
}
else if($resultado >=25 && $resultado < 30) {
    echo "sobrepeso";
}
else if($resultado >=30 && $resultado <35) {
    echo "obesidade grau 1";
}
else if ($resultado >= 35 && $resultado <40){
     echo "obesidade grau 2";
}
    else if($resultado >=40){
        echo "obesidade grau 3";
    }
    ?>

