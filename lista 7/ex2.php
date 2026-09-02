<?php
function analisarVenda($produto, $custo, $venda) {
    $lucro = $venda - $custo;
    if($lucro <= 0) {
       $mensagem = "Prejuízo!";
    }
    elseif($lucro <= 20) {
        $mensagem = "lucro baixo, mas vale a pena";
    }
    else{
        $mensagem = "lucro alto, vale a pena";
    }
    echo "produto: $produto<br>";
    echo "lucro: $lucro<br>";
    echo "analise: $mensagem<br>";
}
analisarVenda("camisa", 40, 35);
?>,