<?php

//calculadora, troque a operação 4 vezes para testar +, -, *

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo "soma é: ", $n1 + $n2;
}
else if ($operacao == "-"){
    echo "subtração é: ", $n1 - $n2;
}
else if ($operacao == "*"){
    echo "multiplicação é: ", $n1 * $n2;
}
else if ($operacao == "/"){
    echo "divisao é: ", $n1 / $n2;
}
else{
    echo "operacao invalida ";
}
?>