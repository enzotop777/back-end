<?php

$gmail = $_POST["gmail"];
$senha = $_POST["senha"];

if($gmail  == "enzao2022@gmail.com" && $senha == "enzudo2022"){
    echo "login, bem sucedido!!!";
}else{
    echo "login ou senha invalidos!!!";
}
?>