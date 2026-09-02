<?php

echo " 1 - pizza, 2 - hamburguer, 3 - refrigerante, 4- sobremesa, 5 - sair <br>";
$opcao = 2;

switch ($opcao ) {
    case 1:
        echo " pizza 2 sabores";
        break;
    case 2:
        echo " hamburguer com batata frita";
        break;
    case 3: 
        echo " coca zero ou normal";
        break;
    case 4:
        echo "sorvete ou bolo de chocolate";
        break;
    case 5: 
        echo "saindo...";
        break;
    default:
        echo "opcao invalida";
        break;
}

