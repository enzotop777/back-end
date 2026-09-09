<?php

$faturas = [200, 300, 400, 500, 312];   
$soma = 0;
echo "resumo das suas faturas do seu cortao <br>";

foreach($faturas as $fatura){
    echo "valor da fatura: $fatura <br>";
    $soma = $soma + $fatura;
}
    echo "total das faturas: $soma <br>";