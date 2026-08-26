<?php

$nome = "joao";
$nivel_Acesso = 2;

if($nivel_Acesso == 1){
    echo "acesso basico";
}
else if($nivel_Acesso == 2){
    echo "acesso intermediario";
}
else if($nivel_Acesso == 3){
    echo "acesso administrativo";
}
else{
    echo "acesso invalido";
}

?>

