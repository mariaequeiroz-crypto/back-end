<?php
$valor = "20";
$valorminimoentrega = "10";
$idadecliente = "16";
$idademinimabebidaalcoolica = "18";
$estoque = "6";
$quantidadepedida = "2";
$statuspedido = "pago";
$pago = "pago";

if($valor >= $valorminimoentrega){
    echo "Entrega grátis liberada! <br>";
}
else{
   echo "Entrega grátis não liberada! <br>";
}

if($idadecliente >= 18){
    echo "Pode comprar bebida alcoólica! <br>";
}
else{
    echo "Ainda não pode comprar bebida alcoólica! <br>";
}

if($quantidadepedida <= $estoque){
    echo "Pedido pode ser aceito! <br>";
}
else{
    echo "Pedido não foi pode ser aceito! <br>";
}

if($statuspedido = $pago){
    echo "O pedido foi liberado para a produção! <br>";

}
else{
    echo "O pedido não foi liberado para a produção! <br>";
}
?>
