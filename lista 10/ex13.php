<?php
$palavraOriginal = "gato";
$palavraDigitada = "pato";

$distancia = levenshtein($palavraOriginal, $palavraDigitada);

echo $distancia; // Saída: 1

?>
