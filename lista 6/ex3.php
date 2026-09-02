<?php

echo "caixa eletronico - Itau <br>";
echo "1 - consulta saldo, 2 - fazer saque, 3 - fazer deposito, 4 - ver extrato, 5 - sair <br>";

$opcao = 3;

switch ($opcao) {
    case 1:
        echo " Seu saldo é de R$ 650,00";
        break;
    case 2:
        echo "qual valor?";
        break;
    case 3: 
        echo "confirmar deposito";
        break;
    case 4:
        echo "extrato";
        break;
    case 5: 
        echo "saindo...";
        break;

}