<?php

$email = "mariaqueiroz@gmail.com";
$senha = "210110";
$status = "desativado";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "mariaqueiroz@gmail.com" && $senha == "210110" && $status == "ativa"){
    echo "Acesso liberado <br>";
    header("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha inválido!";
}