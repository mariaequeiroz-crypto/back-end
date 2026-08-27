<?php

$idade = 26;
$deficiente = "não";
$gestante = "sim";

if($idade >= 60 && $deficiente == "sim" && $gestante == "sim"){
    echo "Atendimento prioritário";
}
else {
    echo "Atendimento normal";
}




