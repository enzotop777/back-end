<?php

$qtd = 0;

for($numero = 1; $numero <= 50; $numero++){
   if($numero % 3 == 0){
        echo "multiplo de 3: $numero <br>";
        $qtd = $qtd + 1;
    }
}
    echo "total de multiplos por 3, $qtd";
    
    ?>